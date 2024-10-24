<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'upload', 'session']);
    }

    // List all jurusan
    public function index() {
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/jurusan/jurusan_list', $data);
        $this->load->view('admin/footer');
    }

    // Create new jurusan
    public function create() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        
        if ($this->form_validation->run() === TRUE) {
            $logo = $this->_upload_file('logo', './uploads/jurusan/');
            $gambar = $this->_upload_file('gambar', './uploads/jurusan/');

            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' => $logo,
                'gambar' => $gambar,
                'user_id' => $this->session->userdata('user_id'), // Menyimpan ID user
                'create_at' => date('Y-m-d H:i:s'),
            ];

            $this->Jurusan_model->create_jurusan($data);
            $this->session->set_flashdata('success', 'Jurusan berhasil ditambahkan.');
            redirect('admin/jurusan');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/jurusan/jurusan_form');
            $this->load->view('admin/footer');
        }
    }

    // Edit jurusan
    public function edit($id) {
        $jurusan = $this->Jurusan_model->get_jurusan($id);
        
        if (!$jurusan) {
            show_404(); // Jika jurusan tidak ditemukan
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() === TRUE) {
            // Upload file dan tetap menggunakan file lama jika tidak ada file baru
            $logo = $this->_upload_file('logo', './uploads/jurusan/');
            $gambar = $this->_upload_file('gambar', './uploads/jurusan/');

            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' => $logo ?: $jurusan['logo'], // Jika upload gagal, gunakan file lama
                'gambar' => $gambar ?: $jurusan['gambar'],
                'update_at' => date('Y-m-d H:i:s'), // Update timestamp
            ];

            // Update jurusan
            $this->Jurusan_model->update_jurusan($id, $data);
            $this->session->set_flashdata('success', 'Jurusan berhasil diperbarui.');
            redirect('admin/jurusan');
        } else {
            $data['jurusan'] = $jurusan;
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/jurusan/jurusan_form', $data);
            $this->load->view('admin/footer');
        }
    }

    // Delete jurusan
    public function delete($id) {
        $jurusan = $this->Jurusan_model->get_jurusan($id);
        if ($jurusan) {
            $this->Jurusan_model->delete_jurusan($id);
            $this->session->set_flashdata('success', 'Jurusan berhasil dihapus.');
            redirect('admin/jurusan');
        } else {
            show_404();
        }
    }

    // Handle file uploads
    private function _upload_file($field_name, $upload_path) {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB max
        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            return null; // Jika upload gagal
        }
    }
}
