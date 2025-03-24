<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {
    
    public function get_all() {
        return $this->db->order_by('created_at', 'DESC')->get('contact')->result();
    }

    public function insert($data) {
        return $this->db->insert('contact', $data);
    }

    public function update_status($id, $status) {
        return $this->db->where('id', $id)->update('contact', ['status' => $status]);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('contact');
    }
    public function count_all()
{
    return $this->db->count_all('contact');
}

}
