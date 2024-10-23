<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pengumuman_model'); // Load the model
    }

    // Display all pengumuman
    public function index() {
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pengumuman/pengumuman_list', $data); // Create this view for listing pengumuman
        $this->load->view('admin/footer');
    }

    // Add new pengumuman
    public function create() {
        // Set validation rules as needed
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Load the form view if validation fails
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/pengumuman/pengumuman_form'); // Create this view for adding pengumuman
            $this->load->view('admin/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'user_id' => $this->session->userdata('user_id') // Assuming user session is stored
            ];
            $this->Pengumuman_model->insert_entry($data);
            redirect('pengumuman'); // Redirect after successful insert
        }
    }

    // Edit an existing pengumuman
    public function edit($id) {
        // Similar logic as create, but for updating an existing entry
    }

    // Delete an existing pengumuman
    public function delete($id) {
        $this->Pengumuman_model->delete_entry($id);
        redirect('pengumuman');
    }
}
