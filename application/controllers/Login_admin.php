<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->load->model('M_login_admin');
    }

    public function index()
    {
        if ($this->session->userdata('log_in_admin')) {
            redirect('admin/main', 'refresh');
        } else {
            $this->load->view('login_admin');
        }
    }

    public function proses()
    {
        $username  = $this->input->post('username', true);
        $password  = $this->input->post('password', true);

        $row = $this->M_login_admin->validasi_adm($username, $password);

        if ($row) {
            $this->_daftarkan_session($row);
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah!');
            redirect('admin', 'refresh');
        }
    }

    private function _daftarkan_session($row)
    {
        $session_data = [
            'id'       => $row->id,
            'username' => $row->username,
            'log_in_admin' => true
        ];
        $this->session->set_userdata($session_data);
        redirect('admin/main', 'refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}
