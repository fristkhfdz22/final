<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
    }

    public function login() {
        $this->load->view('admin/login'); // Load the login view
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Check credentials
        $user = $this->User_model->check_login($username, $password);
        
        if ($user) {
            // Set session data
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('role_id', $user->role_id);
            redirect('admin/dashboard'); // Redirect to the admin dashboard
        } else {
            $data['error'] = 'Invalid username or password.';
            $this->load->view('admin/login', $data); // Reload login view with error
        }
    }

    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login if not logged in
        }

        $this->load->view('admin/header'); // Load the dashboard view
        $this->load->view('admin/sidebar'); // Load the dashboard view
        $this->load->view('admin/dashboard'); // Load the dashboard view

        $this->load->view('admin/footer'); // Load the dashboard view
    }

    public function logout() {
        $this->session->sess_destroy(); // Destroy session
        redirect('admin/login'); // Redirect to login page
    }
    
}
