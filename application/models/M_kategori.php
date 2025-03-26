<?php
class M_kategori extends CI_Model {
    public function get_all_kategori() {
        return $this->db->get('kategori_menu')->result();
    }

    public function insert_kategori($data) {
        $this->db->insert('kategori_menu', $data);
    }

    public function update_kategori($id, $data) {
        $this->db->where('id', $id)->update('kategori_menu', $data);
    }

    public function delete_kategori($id) {
        $this->db->where('id', $id)->delete('kategori_menu');
    }
}
?>
