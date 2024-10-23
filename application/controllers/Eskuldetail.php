<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EskulDetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekstrakurikuler_model'); // Load model ekstrakurikuler
    }

    public function index($id)
    {
        // Ambil detail ekstrakurikuler berdasarkan ID
        $data['eskul'] = $this->Ekstrakurikuler_model->get_eskul_by_id($id);
        
        if (empty($data['eskul'])) {
            show_404(); // Tampilkan halaman 404 jika data tidak ditemukan
        }

        // Muat tampilan detail
        $this->load->view('user/header');
        $this->load->view('user/eskuldetail/eskuldetail', $data);
        $this->load->view('user/footer');
    }
}
