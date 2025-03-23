<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function validasi_adm($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            $row = $query->row();
            if (md5($password) == $row->password) { 
                return $row;
            }
        }
        return null;
    }
}
