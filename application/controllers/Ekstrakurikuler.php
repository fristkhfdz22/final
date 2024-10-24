<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
        $this->load->library('upload');
    }

    public function index() {
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/eskul/ekstrakurikuler_list', $data);
        $this->load->view('admin/footer');
    }

    private function _upload_file($field_name, $upload_path) {
        $config['upload_path'] = './uploads/ekstrakurikuler';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2048; // 2MB max
        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        } else {
            return null;
        }
    }

    public function tambah() {
        if ($this->input->post()) {
            $logo = $this->_upload_file('logo', 'ekstrakurikuler');
            $gambar = $this->_upload_file('gambar', 'ekstrakurikuler');

            $data = array(
                'nama_ekstra' => $this->input->post('nama_ekstra'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pembimbing' => $this->input->post('pembimbing'),
                'logo' => $logo,
                'gambar' => $gambar
            );
            $this->Ekstrakurikuler_model->insert_eskul($data);
            redirect('ekstrakurikuler');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eskul/ekstrakurikuler_form');
            $this->load->view('admin/footer');
        }
    }

    public function edit($id) {
        $data['eskul'] = $this->Ekstrakurikuler_model->get_eskul_by_id($id);

        if ($this->input->post()) {
            $logo = $this->_upload_file('logo', 'ekstrakurikuler');
            $gambar = $this->_upload_file('gambar', 'ekstrakurikuler');

            $data_update = array(
                'nama_ekstra' => $this->input->post('nama_ekstra'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pembimbing' => $this->input->post('pembimbing'),
                'logo' => $logo ?: $data['eskul']['logo'],
                'gambar' => $gambar ?: $data['eskul']['gambar']
            );
            $this->Ekstrakurikuler_model->update_eskul($id, $data_update);
            redirect('ekstrakurikuler');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eskul/ekstrakurikuler_form', $data);
            $this->load->view('admin/footer');
        }
    }

    public function hapus($id) {
        $this->Ekstrakurikuler_model->delete_eskul($id);
        redirect('ekstrakurikuler');
    }
}
