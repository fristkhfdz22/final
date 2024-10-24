<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->helper(['form', 'url']);
        $this->load->library(['form_validation', 'session']);
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
            $logo = $this->handle_file_upload('logo');
            $gambar = $this->handle_file_upload('gambar');
    
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' => $logo,
                'gambar' => $gambar
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
            // Jika ada file baru, upload dan ganti file lama
            $logo = $this->handle_file_upload('logo', $jurusan['logo']);
            $gambar = $this->handle_file_upload('gambar', $jurusan['gambar']);
    
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'logo' => $logo,
                'gambar' => $gambar
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

    // Handle file uploads for logo and gambar
    private function handle_file_upload($field_name, $current_file = null) {
        if (!empty($_FILES[$field_name]['name'])) {
            $config['upload_path'] = './uploads/jurusan/'; // Ubah direktori ke 'uploads/jurusan'
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = time() . '_' . $_FILES[$field_name]['name']; // Optional: Rename file to avoid conflicts
    
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload($field_name)) {
                return $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                return $current_file; // Jika upload gagal, tetap gunakan file yang ada
            }
        }
        return $current_file; // Jika tidak ada file di-upload, kembalikan file yang sudah ada
    }
    
}
