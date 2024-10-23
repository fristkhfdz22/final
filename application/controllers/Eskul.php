<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eskul extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    // Menampilkan daftar ekstrakurikuler
    public function index() {
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/eskul/ekstrakurikuler_list', $data);
        $this->load->view('admin/footer');
    }

    // Menampilkan form tambah ekstrakurikuler
    public function add() {
        $this->form_validation->set_rules('nama_ekstra', 'Nama Ekstrakurikuler', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan form tambah ekstrakurikuler
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eskul/ekstrakurikuler_form');
            $this->load->view('admin/footer');
        } else {
            // Konfigurasi upload file
            $config['upload_path'] = './uploads/ekstrakurikuler/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Max size 2MB
            $this->upload->initialize($config);

            // Upload logo
            $logo = null;
            if ($this->upload->do_upload('logo')) {
                $upload_data_logo = $this->upload->data();
                $logo = 'ekstrakurikuler/' . $upload_data_logo['file_name'];
            }

            // Upload gambar
            $gambar = null;
            if ($this->upload->do_upload('gambar')) {
                $upload_data_gambar = $this->upload->data();
                $gambar = 'ekstrakurikuler/' . $upload_data_gambar['file_name'];
            }

            // Siapkan data untuk disimpan
            $data = [
                'nama_ekstra' => $this->input->post('nama_ekstra'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pembimbing' => $this->input->post('pembimbing'),
                'logo' => $logo,
                'gambar' => $gambar,
                'user_id' => $this->session->userdata('user_id'),
            ];

            // Simpan data ke database
            if ($this->Ekstrakurikuler_model->insert_ekstrakurikuler($data)) {
                redirect('ekstrakurikuler'); // Redirect ke daftar ekstrakurikuler
            } else {
                $this->session->set_flashdata('error', 'Gagal menyimpan data.');
                redirect('ekstrakurikuler/add');
            }
        }
    }

    // Menampilkan form edit ekstrakurikuler
    public function edit($id) {
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_ekstrakurikuler_by_id($id);
        $this->form_validation->set_rules('nama_ekstra', 'Nama Ekstrakurikuler', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan form edit
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eskul/ekstrakurikuler_form', $data);
            $this->load->view('admin/footer');
        } else {
            // Konfigurasi upload file
            $config['upload_path'] = './uploads/ekstrakurikuler/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Max size 2MB
            $this->upload->initialize($config);

            // Cek logo baru
            $logo = $this->input->post('existing_logo'); // Ambil logo yang ada
            if ($_FILES['logo']['name']) {
                if ($this->upload->do_upload('logo')) {
                    $upload_data_logo = $this->upload->data();
                    $logo = 'ekstrakurikuler/' . $upload_data_logo['file_name'];
                }
            }

            // Cek gambar baru
            $gambar = $this->input->post('existing_gambar'); // Ambil gambar yang ada
            if ($_FILES['gambar']['name']) {
                if ($this->upload->do_upload('gambar')) {
                    $upload_data_gambar = $this->upload->data();
                    $gambar = 'ekstrakurikuler/' . $upload_data_gambar['file_name'];
                }
            }

            // Siapkan data untuk diupdate
            $update_data = [
                'nama_ekstra' => $this->input->post('nama_ekstra'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pembimbing' => $this->input->post('pembimbing'),
                'logo' => $logo,
                'gambar' => $gambar,
            ];

            // Update data di database
            if ($this->Ekstrakurikuler_model->update_ekstrakurikuler($id, $update_data)) {
                redirect('ekstrakurikuler'); // Redirect ke daftar ekstrakurikuler
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui data.');
                redirect('ekstrakurikuler/edit/' . $id);
            }
        }
    }

    // Menghapus data ekstrakurikuler
    public function delete($id) {
        if ($this->Ekstrakurikuler_model->delete_ekstrakurikuler($id)) {
            redirect('ekstrakurikuler'); // Redirect ke daftar ekstrakurikuler
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
            redirect('ekstrakurikuler');
        }
    }
}
