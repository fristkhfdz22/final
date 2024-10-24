<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Prestasi_model');
        $this->load->library('upload');
        $this->load->helper('text'); // Tambahkan ini untuk memuat text_helper
    }

    // Menampilkan daftar prestasi
    public function index() {
        $data['prestasi'] = $this->Prestasi_model->get_all_prestasi();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/prestasi/prestasi_list', $data);
        $this->load->view('admin/footer');
    }

    // Fungsi untuk upload gambar
    private function _upload_gambar($field_name) {
        $config['upload_path'] = './uploads/prestasi/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $this->upload->initialize($config);

        if ($this->upload->do_upload($field_name)) {
            return $this->upload->data('file_name');
        } else {
            return null;
        }
    }

    // Menampilkan form tambah prestasi
    public function tambah() {
        if ($this->input->post()) {
            $gambar = $this->_upload_gambar('gambar', 'prestasi');

            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'penulis' => $this->input->post('penulis'),

                'tanggal' => $this->input->post('tanggal'),
                'gambar' => $gambar
            ];

            $this->Prestasi_model->insert_prestasi($data);
            redirect('prestasi');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/prestasi/prestasi_form');
            $this->load->view('admin/footer');
        }
    }

    // Menampilkan form edit prestasi
    public function edit($id) {
        $data['prestasi'] = $this->Prestasi_model->get_prestasi_by_id($id);

        if ($this->input->post()) {
            $gambar = $this->_upload_gambar('gambar', 'prestasi');

            $data_update = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'penulis' => $this->input->post('penulis'),

                'tanggal' => $this->input->post('tanggal'),
                'gambar' => $gambar ?: $data['prestasi']['gambar']
            ];

            $this->Prestasi_model->update_prestasi($id, $data_update);
            redirect('prestasi');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/prestasi/prestasi_form', $data);
            $this->load->view('admin/footer');
        }
    }

    // Menghapus prestasi
    public function hapus($id) {
        $this->Prestasi_model->delete_prestasi($id);
        redirect('prestasi');
    }
}
