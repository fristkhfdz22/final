<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the models to fetch data
        $this->load->model('Kepalasekolah_model'); // Load the Kepala Sekolah model
        $this->load->model('Pengumuman_model'); // Load the Pengumuman model
        $this->load->model('Berita_model'); // Load the Berita model
        $this->load->model('Jurusan_model'); // Load the Jurusan model
    }
    public function index()
    {
        // Fetch data for Kepala Sekolah
        $kepalaSekolahEntries = $this->Kepalasekolah_model->get_all();
    
        // Ensure the $kepalasekolah variable is always defined
        if (!empty($kepalaSekolahEntries)) {
            $data['kepalasekolah'] = $kepalaSekolahEntries[0]; // Get the first entry
        } else {
            // Initialize with null or an empty array
            $data['kepalasekolah'] = null; // Change to null to avoid issues in header
        }
    
        // Fetch all announcements
        $data['pengumuman'] = $this->Pengumuman_model->get_all(); // Get all pengumuman
    
        // Fetch all berita
        $data['berita'] = $this->Berita_model->get_all_berita(); // Get all berita
    
        // Fetch all jurusan
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan(); // Get all jurusan
    
        // Load the views and pass the data
        $this->load->view('user/header', $data); // Pass data to header view
        $this->load->view('user/home', $data); // Pass the data for Kepala Sekolah to home view
        $this->load->view('user/info', $data);  // Pass the announcements data to info view
        $this->load->view('user/berita', $data); // Pass the berita data to berita view
        $this->load->view('user/jurusan', $data); // Pass the jurusan data to jurusan view
        $this->load->view('user/eskul'); // Pass the ekstrakurikuler data to eskul view
        
        $this->load->view('user/footer');
    }
   
    
}
