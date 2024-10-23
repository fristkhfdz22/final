<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepalasekolah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kepalasekolah_model'); // Load the model
        $this->load->library('form_validation'); // Load form validation library
    }

    // Display all data in the admin panel
    public function index() {
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/kepalasekolah/kepalasekolah_crud', $data);
        $this->load->view('admin/footer');
    }

    // Add new entry
    public function create() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isisambutan', 'Isi Sambutan', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Load form view with any validation errors
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/kepalasekolah/kepalasekolah_form');
            $this->load->view('admin/footer');
        } else {
            $upload_image = $this->_upload_image();
            // Insert entry; if no image uploaded, pass NULL
            $this->Kepalasekolah_model->insert_entry($upload_image);
            redirect('kepalasekolah');
        }
    }

    // Edit existing entry
    public function edit($id) {
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_by_id($id);
        
        // Check if data exists for the provided ID
        if (empty($data['kepalasekolah'])) {
            show_404(); // Show 404 page if no data found
        }

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isisambutan', 'Isi Sambutan', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Load form view with existing data to pre-fill the form
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/kepalasekolah/kepalasekolah_form', $data);
            $this->load->view('admin/footer');
        } else {
            // Attempt to upload a new image, but it's optional
            $upload_image = $this->_upload_image();

            // If upload failed, retain the existing photo
            if (!$upload_image) {
                $upload_image = $data['kepalasekolah']['foto']; // Retain existing photo
            }

            $this->Kepalasekolah_model->update_entry($id, $upload_image);
            redirect('kepalasekolah');
        }
    }

    // Delete an entry
    public function delete($id) {
        $this->Kepalasekolah_model->delete_entry($id);
        redirect('kepalasekolah');
    }

    // Helper function to handle image upload
    private function _upload_image() {
        $config['upload_path'] = './uploads/kepalasekolah/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['file_name'] = uniqid(); // Generate unique file name

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name'); // Return uploaded file name
        } else {
            // Set error message for the upload error
            $this->session->set_flashdata('error', $this->upload->display_errors());
            return NULL; // Return NULL if upload fails
        }
    }
    

    
    
}
