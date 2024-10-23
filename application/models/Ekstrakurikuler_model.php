<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler_model extends CI_Model {

    // Mendapatkan semua ekstrakurikuler
    public function get_all_ekstrakurikuler() {
        return $this->db->get('ekstrakurikuler')->result();
    }

    // Mendapatkan ekstrakurikuler berdasarkan ID
    public function get_ekstrakurikuler_by_id($id) {
        return $this->db->get_where('ekstrakurikuler', ['id' => $id])->row();
    }

    // Menambahkan ekstrakurikuler baru
    public function insert_ekstrakurikuler($data) {
        return $this->db->insert('ekstrakurikuler', $data);
    }

    // Memperbarui ekstrakurikuler
    public function update_ekstrakurikuler($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('ekstrakurikuler', $data);
    }

    // Menghapus ekstrakurikuler
    public function delete_ekstrakurikuler($id) {
        return $this->db->delete('ekstrakurikuler', ['id' => $id]);
    }
}
