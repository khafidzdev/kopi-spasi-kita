<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function insert_admin($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT); 
        return $this->db->insert('admin', $data);
    }
}
?>
