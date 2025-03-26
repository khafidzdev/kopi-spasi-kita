<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('M_menu'); 
        $this->load->model('M_about'); 
        $this->load->model('M_testi');
        $this->load->model('M_setting'); 
        $this->load->model('M_team'); 
        $this->load->model('M_contact'); 
    
       
    }
    public function index() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['about'] = $this->M_about->get();
        $data['testimoni'] = $this->M_testi->get_all_testimoni();
        $this->load->view('main/header',$data);
        $this->load->view('main/navbar');
        $this->load->view('main/home', $data);
        $this->load->view('main/footer',$data);    }

    public function about() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['about'] = $this->M_about->get();
        $data['team'] = $this->M_team->get_all();
        $data['title'] = "About - kopi(spasi)kita"; 
        $this->load->view('main/header',$data);
        $this->load->view('main/navbar');
        $this->load->view('main/about',$data);
        $this->load->view('main/footer',$data);
    }

    public function menu() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['title'] = "Menu - kopi(spasi)kita"; 
        $data['food_menu'] = $this->M_menu->get_by_category('Makanan');
        $data['drink_menu'] = $this->M_menu->get_by_category('Minuman');
        $this->load->view('main/header' ,$data);
        $this->load->view('main/navbar');
        $this->load->view('main/menu', $data); 
        $this->load->view('main/footer',$data);
    }
    

    public function contact() {
        if ($this->input->post()) {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'status' => 'Pending'
            ];
            $this->M_contact->insert($data);
            redirect('contact');
        }
        $data['setting'] = $this->M_setting->get_setting();
        $data['title'] = "Contact - kopi(spasi)kita"; 
        $data['setting'] = $this->M_setting->get_setting();
        $this->load->view('main/header',$data);
        $this->load->view('main/navbar');
        $this->load->view('main/contact',$data);
        $this->load->view('main/footer',$data);
    }
    public function send() {
        $data = [
            'nama' => $this->input->post('nama', TRUE),
            'email' => $this->input->post('email', TRUE),
            'subject' => $this->input->post('subject', TRUE),
            'message' => $this->input->post('message', TRUE),
            'status' => 'Pending'
        ];
        $this->M_contact->insert($data);
        redirect('contact'); 
    }
    public function reservasi() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['setting'] = $this->M_setting->get_setting();
        $data['menu'] = $this->M_menu->get_all();
        $data['title'] = "Reservasi - kopi(spasi)kita"; 
        $this->load->view('main/header',$data);
        $this->load->view('main/navbar');
        $this->load->view('main/reservasi',$data);
        $this->load->view('main/footer',$data);
    }
    public function not_found()
    {
        $data['setting'] = $this->M_setting->get_setting();
        $this->output->set_status_header('404');
        $this->load->view('main/header');
        $this->load->view('main/navbar');
        $this->load->view('main/404'); 
        $this->load->view('main/footer',$data);
    }
}
