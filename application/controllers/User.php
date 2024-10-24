<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat model untuk mengambil data
        $this->load->model('Kepalasekolah_model');
        $this->load->model('Pengumuman_model');
        $this->load->model('Berita_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Ekstrakurikuler_model');
        $this->load->model('Prestasi_model');
        $this->load->model('Gurustaff_model'); // Memuat model Gurustaff

        $this->load->helper('text');
    }

    public function index()
    {
        // Mengambil data Kepala Sekolah
        $kepalaSekolahEntries = $this->Kepalasekolah_model->get_all();
        $data['kepalasekolah'] = !empty($kepalaSekolahEntries) ? $kepalaSekolahEntries[0] : null;

        // Mengambil semua data
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $data['berita'] = $this->Berita_model->get_all_berita();
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler();
        $data['prestasi'] = $this->Prestasi_model->get_all_prestasi();
        $data['gurustaff'] = $this->Gurustaff_model->get_all(); // Pastikan ini menggunakan get_all()

        // Memuat tampilan dan mengirimkan data
        $this->load->view('user/header', $data);
        $this->load->view('user/home', $data);
        $this->load->view('user/info', $data);
        $this->load->view('user/berita', $data);
        $this->load->view('user/jurusan', $data);
        $this->load->view('user/eskul', $data);
        $this->load->view('user/prestasi', $data);
        $this->load->view('user/gurustaff', $data);
        $this->load->view('user/footer');
    }
}
