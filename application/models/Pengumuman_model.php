<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_model extends CI_Model {
    
    // Constructor to load the database
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fetch all entries from the pengumuman table
    public function get_all() {
        $this->db->order_by('tanggal_mulai', 'DESC'); // Sort by the start date, if applicable
        $query = $this->db->get('pengumuman');
        return $query->result_array();
    }

    // Fetch a single entry by ID
    public function get_by_id($id) {
        $query = $this->db->get_where('pengumuman', ['id' => $id]);
        return $query->row_array();
    }

    // Insert a new entry
    public function insert_entry($data) {
        // Validate and sanitize the input data if necessary
        $data['create_at'] = date('Y-m-d H:i:s'); // Set creation timestamp
        return $this->db->insert('pengumuman', $data);
    }

    // Update an existing entry
    public function update_entry($id, $data) {
        // Validate and sanitize the input data if necessary
        $data['update_at'] = date('Y-m-d H:i:s'); // Set update timestamp
        $this->db->where('id', $id);
        return $this->db->update('pengumuman', $data);
    }

    // Soft delete an entry
    // Delete an entry (soft delete)
    public function delete_entry($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pengumuman'); // Delete the entry from the table
    }


    // Restore a soft-deleted entry
    
}
