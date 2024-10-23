<?php
class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Berita_model'); // Load the model
        $this->load->helper(array('form', 'url')); // Load form and URL helpers
        $this->load->library('form_validation'); // Load form validation library
    }

    // View all berita
    public function index() {
        $data['berita'] = $this->Berita_model->get_all_berita();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/berita/berita_list', $data); // A view to list all berita
        $this->load->view('admin/footer');
    }

    // View single berita
    public function view($id) {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        if (empty($data['berita'])) {
            show_404();
        }
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/berita/berita', $data); // A view to show a single berita
        $this->load->view('admin/footer');
    }

    // Create berita
    public function create() {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('img', 'Image', 'callback_handle_image_upload');
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/berita/berita_form'); // A form to create berita
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'judul'   => $this->input->post('judul'),
                'konten'  => $this->input->post('konten'),
                'tanggal' => $this->input->post('tanggal'),
                'penulis' => $this->input->post('penulis'),
                'img'     => $this->upload->data('file_name'), // Get the uploaded image name
                'user_id' => $this->session->userdata('user_id'), // Assuming logged-in user
            );
            $this->Berita_model->insert_berita($data);
            redirect('admin/berita');
        }
    }
    
    // Edit berita
    public function edit($id) {
        $data['berita'] = $this->Berita_model->get_berita_by_id($id);
        
        if (empty($data['berita'])) {
            show_404();
        }
    
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('konten', 'Konten', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
    
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/berita/berita_form', $data); // Form to edit berita
            $this->load->view('admin/footer');
        } else {
            // Only update img if a new file has been uploaded
            $update_data = array(
                'judul'   => $this->input->post('judul'),
                'konten'  => $this->input->post('konten'),
                'tanggal' => $this->input->post('tanggal'),
                'penulis' => $this->input->post('penulis'),
            );
    
            if (!empty($_FILES['img']['name'])) {
                $this->load->library('upload');
                $config['upload_path'] = './uploads/'; // Make sure this folder exists
                $config['allowed_types'] = 'gif|jpg|png';
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('img')) {
                    $update_data['img'] = $this->upload->data('file_name'); // Update img if a new one was uploaded
                } else {
                    // Handle upload error
                    $data['error'] = $this->upload->display_errors();
                }
            }
    
            $this->Berita_model->update_berita($id, $update_data);
            redirect('admin/berita');
        }
    }
    
    // Image upload callback
    public function handle_image_upload($str) {
        if (empty($_FILES['img']['name'])) {
            return true; // No file uploaded, validation passes
        }
    
        $this->load->library('upload');
        $config['upload_path'] = './uploads/'; // Make sure this folder exists
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('img')) {
            $this->form_validation->set_message('handle_image_upload', $this->upload->display_errors());
            return false;
        }

        return true; // If upload successful, validation passes
    }

    // Delete berita (soft delete)
    public function delete($id) {
        $this->Berita_model->delete_berita($id);
        redirect('admin/berita');
    }
}
?>
