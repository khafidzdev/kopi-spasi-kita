<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

    public function get_by_category($kategori)
    {
        $this->db->where('kategori', $kategori);
        $query = $this->db->get('menu');
    
        if ($query->num_rows() == 0) {
            log_message('error', "Menu kategori $kategori tidak ditemukan!");
        } else {
            log_message('info', "Ditemukan " . $query->num_rows() . " menu untuk kategori $kategori");
        }
    
        return $query->result();
    }
    
    public function get_all()
    {
        return $this->db->get('menu')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('menu', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('menu', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('menu');
    }
}
?>
