<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_model extends CI_Model {

    public function get_all_prestasi()
    {
        $query = $this->db->get('prestasi'); // Mengambil data dari tabel 'prestasi'
        return $query->result(); // Mengembalikan hasil sebagai array objek
    }

    public function get_prestasi_by_id($id) {
        return $this->db->get_where('prestasi', ['id' => $id])->row_array();
    }

    public function insert_prestasi($data) {
        return $this->db->insert('prestasi', $data);
    }

    public function update_prestasi($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('prestasi', $data);
    }

    public function delete_prestasi($id) {
        $this->db->where('id', $id);
        return $this->db->delete('prestasi');
    }
}
