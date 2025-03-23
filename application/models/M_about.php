<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

    public function get()
    {
        return $this->db->get('setting')->row(); 
    }

    public function update($data)
    {
        return $this->db->update('setting', $data, ['id' => 1]); 
    }
}
