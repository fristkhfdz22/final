<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Gurustaff_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Menambahkan data guru/staff
    public function create_gurustaff($data) {
        return $this->db->insert('gurustaff', $data);
    }

    // Mendapatkan semua data guru/staff
    public function get_all_gurustaff() {
        return $this->db->get('gurustaff')->result_array();
    }

    // Mendapatkan data guru/staff berdasarkan ID
    public function get_gurustaff($id) {
        return $this->db->get_where('gurustaff', ['id' => $id])->row_array();
    }

    // Mengupdate data guru/staff
    public function update_gurustaff($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('gurustaff', $data);
    }

    // Menghapus data guru/staff
    public function delete_gurustaff($id) {
        $this->db->where('id', $id);
        return $this->db->delete('gurustaff');
    }
}
