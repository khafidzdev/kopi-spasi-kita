<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testi extends CI_Model {

    public function get_all_testimoni() {
        return $this->db->get('testimoni')->result();
    }

    public function insert_testimoni($data) {
        return $this->db->insert('testimoni', $data);
    }

    public function update_testimoni($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('testimoni', $data);
    }

    public function delete_testimoni($id) {
        $this->db->where('id', $id);
        return $this->db->delete('testimoni');
    }
}
?>
