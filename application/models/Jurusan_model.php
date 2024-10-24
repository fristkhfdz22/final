<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Mendapatkan semua jurusan
    public function get_all_jurusan() {
        return $this->db->get('jurusan')->result_array();
    }

    // Menambahkan jurusan baru
    public function create_jurusan($data) {
        $this->db->insert('jurusan', $data);
    }

    // Mendapatkan jurusan berdasarkan ID
    public function get_jurusan($id) {
        return $this->db->get_where('jurusan', ['id' => $id])->row_array();
    }

    // Memperbarui jurusan
    public function update_jurusan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('jurusan', $data);
    }

    // Menghapus jurusan
    public function delete_jurusan($id) {
        $this->db->delete('jurusan', ['id' => $id]);
    }
}
