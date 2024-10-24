<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Gurustaff extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Gurustaff_model');
        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'upload', 'session']);
    }

    // Menampilkan semua data guru/staff
    public function index() {
        $data['gurustaff'] = $this->Gurustaff_model->get_all_gurustaff();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gurustaff/gurustaff_list', $data);
        $this->load->view('admin/footer');
    }

    // Menambahkan data guru/staff
    public function tambah() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() === TRUE) {
            $gambar = $this->_upload_file('gambar');

            $data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'gambar' => $gambar
            ];

            $this->Gurustaff_model->create_gurustaff($data);
            $this->session->set_flashdata('success', 'Data guru/staff berhasil ditambahkan.');
            redirect('gurustaff'); 
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/gurustaff/gurustaff_form');
            $this->load->view('admin/footer');
        }
    }

    // Mengedit data guru/staff
    public function edit($id) {
        $data['gurustaff'] = $this->Gurustaff_model->get_gurustaff($id);

        if (empty($data['gurustaff'])) {
            show_404();
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() === TRUE) {
            $gambar = $this->_upload_file('gambar', $data['gurustaff']['gambar']);

            $update_data = [
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'gambar' => $gambar ? $gambar : $data['gurustaff']['gambar']
            ];

            $this->Gurustaff_model->update_gurustaff($id, $update_data);
            $this->session->set_flashdata('success', 'Data guru/staff berhasil diperbarui.');
            redirect('gurustaff');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/gurustaff/gurustaff_form', $data);
            $this->load->view('admin/footer');
        }
    }

    // Menghapus data guru/staff
    public function delete($id) {
        $this->Gurustaff_model->delete_gurustaff($id);
        $this->session->set_flashdata('success', 'Data guru/staff berhasil dihapus.');
        redirect('gurustaff');
    }

    // Fungsi untuk meng-upload gambar
    private function _upload_file($field_name, $current_file = null) {
        if (!empty($_FILES[$field_name]['name'])) {
            $config['upload_path'] = './uploads/gurustaff/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field_name)) {
                return $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                return null; 
            }
        }
        return $current_file; 
    }
}
