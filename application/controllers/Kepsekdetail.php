<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepsekdetail extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kepalasekolah_model'); // Memuat model
    }

    public function index() {
        // Mengambil data kepala sekolah
        $data['kepalasekolah'] = $this->Kepalasekolah_model->get_first();

        // Memuat tampilan
        $this->load->view('user/header'); // Memuat header
        $this->load->view('user/kepsekdetail/detail', $data); // Memuat detail
        $this->load->view('user/footer'); // Memuat footer
    }
}
