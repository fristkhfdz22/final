<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat model untuk mengambil data
        $this->load->model('Kepalasekolah_model'); // Memuat model Kepala Sekolah
        $this->load->model('Pengumuman_model'); // Memuat model Pengumuman
        $this->load->model('Berita_model'); // Memuat model Berita
        $this->load->model('Jurusan_model'); // Memuat model Jurusan
        $this->load->model('Ekstrakurikuler_model'); // Memuat model Ekstrakurikuler
        $this->load->model('Prestasi_model'); // Memuat model Ekstrakurikuler
        $this->load->model('Gurustaff_model'); // Memuat model Ekstrakurikuler


        $this->load->helper('text'); // Memuat helper text untuk word_limiter
    }

    public function index()
    {
        // Mengambil data Kepala Sekolah
        $kepalaSekolahEntries = $this->Kepalasekolah_model->get_all();
        
        // Pastikan variabel $kepalasekolah selalu didefinisikan
        if (!empty($kepalaSekolahEntries)) {
            $data['kepalasekolah'] = $kepalaSekolahEntries[0]; // Ambil entri pertama
        } else {
            // Inisialisasi dengan null untuk menghindari masalah di header
            $data['kepalasekolah'] = null; // Ganti dengan null
        }

        // Mengambil semua pengumuman
        $data['pengumuman'] = $this->Pengumuman_model->get_all(); // Ambil semua pengumuman
        
        // Mengambil semua berita
        $data['berita'] = $this->Berita_model->get_all_berita(); // Ambil semua berita
        
        // Mengambil semua jurusan
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan(); // Ambil semua jurusan
        
        // Mengambil semua ekstrakurikuler
        $data['ekstrakurikuler'] = $this->Ekstrakurikuler_model->get_all_ekstrakurikuler(); // Memanggil metode yang benar
        $data['prestasi'] = $this->Prestasi_model->get_all_prestasi(); // pastikan ini mengembalikan array objek
        $data['gurustaff'] = $this->Gurustaff_model->get_all_gurustaff(); // pastikan ini mengembalikan array objek

        
        // Memuat tampilan dan mengirimkan data
        $this->load->view('user/header', $data); // Kirim data ke tampilan header
        $this->load->view('user/home', $data); // Kirim data untuk tampilan home
        $this->load->view('user/info', $data);  // Kirim data pengumuman ke tampilan info
        $this->load->view('user/berita', $data); // Kirim data berita ke tampilan berita
        $this->load->view('user/jurusan', $data); // Kirim data jurusan ke tampilan jurusan
        $this->load->view('user/eskul', $data); // Kirim data ekstrakurikuler ke tampilan eskul
        $this->load->view('user/prestasi', $data); // Kirim data ekstrakurikuler ke tampilan eskul
        $this->load->view('user/gurustaff', $data); // Kirim data ekstrakurikuler ke tampilan eskul


        $this->load->view('user/footer'); // Memuat tampilan footer
    }
}
