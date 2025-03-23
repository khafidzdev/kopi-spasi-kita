<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {
    private $table = "setting";

    public function get_setting() {
        return $this->db->get($this->table)->row();
    }

    public function update_setting($data) {
        return $this->db->update($this->table, $data);
    }
}
?>
