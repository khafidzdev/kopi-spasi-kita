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
    

    public function kontak() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['title'] = "Contact - kopi(spasi)kita"; 
        $data['setting'] = $this->M_setting->get_setting();
        $this->load->view('main/header',$data);
        $this->load->view('main/navbar');
        $this->load->view('main/contact',$data);
        $this->load->view('main/footer',$data);
    }

    public function reservasi() {
        $data['setting'] = $this->M_setting->get_setting();
        $data['setting'] = $this->M_setting->get_setting();
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
