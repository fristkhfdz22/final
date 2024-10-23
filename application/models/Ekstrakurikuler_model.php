<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekstrakurikuler_model extends CI_Model {

    public function get_all_ekstrakurikuler() {
        return $this->db->get('ekstrakurikuler')->result_array();
    }

    public function insert_eskul($data) {
        return $this->db->insert('ekstrakurikuler', $data);
    }

    public function get_eskul_by_id($id) {
        return $this->db->get_where('ekstrakurikuler', ['id' => $id])->row_array();
    }

    public function update_eskul($id, $data) {
        return $this->db->update('ekstrakurikuler', $data, ['id' => $id]);
    }

    public function delete_eskul($id) {
        return $this->db->delete('ekstrakurikuler', ['id' => $id]);
    }
}
