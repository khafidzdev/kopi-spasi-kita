<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_team extends CI_Model
{
    private $table = 'team';

    public function get_all() {
        return $this->db->get('team')->result(); // Ambil semua data dari tabel 'team'
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
    public function count_all()
{
    return $this->db->count_all('team');
}

}
?>
