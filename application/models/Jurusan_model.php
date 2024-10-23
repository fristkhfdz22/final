<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model {
    public function get_all_jurusan() {
        return $this->db->get('jurusan')->result_array();
    }

    public function get_jurusan($id) {
        $query = $this->db->get_where('jurusan', ['id' => $id]);
        return $query->row_array(); // Returns a single row as an associative array
    }

    public function create_jurusan($data) {
        return $this->db->insert('jurusan', $data);
    }

    public function update_jurusan($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('jurusan', $data);
    }

    public function delete_jurusan($id) {
        $this->db->where('id', $id);
        return $this->db->delete('jurusan');
    }
}
