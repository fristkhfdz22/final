<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepalasekolah_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Fetch all entries from the table
    public function get_all() {
        $query = $this->db->get('kepalasekolah'); // Adjust the table name as necessary
        return $query->result_array(); // This should return an array of arrays
    }
 


    public function get_first() {
        // Mengambil satu data kepala sekolah
        $query = $this->db->get('kepalasekolah');
        return $query->row_array(); // Mengembalikan data sebagai array
    }

    

    // Fetch a single entry by ID
    public function get_by_id($id) {
        $query = $this->db->get_where('kepalasekolah', array('id' => $id));
        return $query->row_array(); // Mengembalikan satu baris data sebagai array
    }
    

    // Fetch a specific Kepala Sekolah message (assumed there's only one principal)
    public function get_kepalasekolah_message() {
        $this->db->where('id', 3);
        $query = $this->db->get('kepalasekolah');
        return $query->row_array(); // Return the principal message
    }

    // Insert a new entry
    public function insert_entry($foto) {
        $data = [
            'judul' => $this->input->post('judul'),
            'isisambutan' => $this->input->post('isisambutan'),
            'tanggal' => date('Y-m-d'), // Set the current date
            'foto' => $foto,
            'user_id' => $this->session->userdata('user_id') // Assuming user session is stored
        ];
        return $this->db->insert('kepalasekolah', $data); // Insert the data into the table
    }

    // Update an existing entry
    public function update_entry($id, $foto = null) {
        $data = [
            'judul' => $this->input->post('judul'),
            'isisambutan' => $this->input->post('isisambutan'),
            'tanggal' => date('Y-m-d') // Update the date to current
        ];
        
        // Update photo only if a new one is uploaded
        if ($foto) {
            $data['foto'] = $foto; 
        }

        // Update the entry in the database
        $this->db->where('id', $id);
        return $this->db->update('kepalasekolah', $data); // Execute update query
    }

    // Delete an entry
    public function delete_entry($id) {
        $this->db->where('id', $id);
        return $this->db->delete('kepalasekolah'); // Delete the entry from the table
    }
    
}
