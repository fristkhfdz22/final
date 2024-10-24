<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gurustaff extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Gurustaff_model');
        $this->load->library('upload');
        $this->load->helper('url');
    }

    public function index() {
        $data['gurustaff'] = $this->Gurustaff_model->get_all();
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gurustaff/gurustaff_list', $data);
                $this->load->view('admin/footer');

    }

    public function create() {
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gurustaff/gurustaff_form');
                $this->load->view('admin/footer');

    }

    public function store() {
        $config['upload_path'] = './uploads/gurustaff/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // max size in KB
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            $data = [
                'nama' => $this->input->post('nama'),
                'gambar' => $upload_data['file_name'],
                'jabatan' => $this->input->post('jabatan')
            ];
            $this->Gurustaff_model->insert($data);
            redirect('gurustaff');
        } else {
            $error = $this->upload->display_errors();
            echo $error; // Tampilkan error jika upload gagal
        }
    }

    public function edit($id) {
        $data['gurustaff'] = $this->Gurustaff_model->get_by_id($id);
           $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gurustaff/gurustaff_form', $data);
                $this->load->view('admin/footer');

    }

    public function update($id) {
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan')
        ];

        // Cek apakah ada gambar yang diupload
        if ($_FILES['gambar']['name']) {
            $config['upload_path'] = './uploads/gurustaff/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048; // max size in KB
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
                echo $error; // Tampilkan error jika upload gagal
                return;
            }
        }

        $this->Gurustaff_model->update($id, $data);
        redirect('gurustaff');
    }

    public function delete($id) {
        $this->Gurustaff_model->delete($id);
        redirect('gurustaff');
    }
}
