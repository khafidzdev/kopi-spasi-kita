<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library(['session', 'form_validation']);
        $this->load->model('M_setting');
        $this->load->model('M_testi');
        $this->load->model('M_about');
        $this->load->model('M_menu');
        $this->load->model('M_team');
        $this->load->model('M_contact');
        $this->load->model('M_login_admin');

        if (!$this->session->userdata('log_in_admin')) {
            redirect('admin');
        }
    }

    public function main()
    {
        $data['total_menu'] = $this->M_menu->count_all();
        $data['total_testimoni'] = $this->M_testi->count_all();
        $data['total_tim'] = $this->M_team->count_all();
        $data['total_pesan'] = $this->M_contact->count_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/main', $data);
        $this->load->view('admin/footer');

    }
    public function user()
{
    $data['admin'] = $this->db->get_where('admin', ['id' => $this->session->userdata('id')])->row();
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar');
    $this->load->view('admin/user', $data);
    $this->load->view('admin/footer');

}

public function update_credentials()
{
    $id = $this->session->userdata('id');
    $username = $this->input->post('username', true);
    $password = $this->input->post('password', true);

    $data = ['username' => $username];
    if (!empty($password)) {
        $data['password'] = md5($password); 
    }
    if ($this->M_login_admin->update_admin($id, $data)) {
        $this->session->set_flashdata('success', 'Username & Password berhasil diperbarui.');
    } else {
        $this->session->set_flashdata('error', 'Gagal memperbarui data.');
    }

    redirect('admin/user');
}

    public function menu()
    {
        $action = $this->input->post('action');
        if ($action == 'tambah') {
            return $this->tambah_menu();
        } elseif ($action == 'update') {
            return $this->edit_menu();
        } elseif ($action == 'hapus') {
            return $this->hapus_menu();
        }
        $data['menu'] = $this->M_menu->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/footer');

    }

    private function tambah_menu()
    {
        $data = [
            'nama'      => $this->input->post('nama'),
            'kategori'  => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga'     => $this->input->post('harga')
        ];

        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path']   = './uploads/menu/';
            $config['allowed_types'] = '*';
            $config['max_size']      = 10240;
            
            $this->load->library('upload');
            $this->upload->initialize($config); 
        
            if ($this->upload->do_upload('gambar')) {
                $data['gambar'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors(); 
                exit;
            }
        }
        

        $this->M_menu->insert($data);
        $this->session->set_flashdata('success', 'Menu berhasil ditambahkan!');
        redirect('admin/menu');
    }

    private function edit_menu()
    {
        $id = $this->input->post('id');
        $data = [
            'nama'      => $this->input->post('nama'),
            'kategori'  => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga'     => $this->input->post('harga')
        ];

        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path']   = './uploads/menu/';
            $config['allowed_types'] = '*';
            $config['max_size']      = 10240;
            
            $this->load->library('upload');
            $this->upload->initialize($config);
        
            if ($this->upload->do_upload('gambar')) {
                $data['gambar'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors(); 
                exit;
            }
        }
        

        $this->M_menu->update($id, $data);
        $this->session->set_flashdata('success', 'Menu berhasil diperbarui!');
        redirect('admin/menu');
    }
    public function hapus_menu() {
        $id = $this->input->post('id');
        if ($id) {
            $this->db->delete('menu', ['id' => $id]); 
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
    

    public function about()
    {
        $data['about'] = $this->M_about->get();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/about', $data);

        $this->load->view('admin/footer');
    }

    public function edit_about()
    {
        $data = [
            'about_desk'   => $this->input->post('about_desk'),
            'ourstory_desk'=> $this->input->post('ourstory_desk')
        ];

        if (!empty($_FILES['about_img']['name'])) {
            $config['upload_path']   = './uploads/about/';
            $config['allowed_types'] = '*';
            $config['max_size']      = 10240;
            
            $this->load->library('upload');
            $this->upload->initialize($config); 
        
            if ($this->upload->do_upload('about_img')) {
                $data['about_img'] = $this->upload->data('file_name');
            }
        }
        
        if (!empty($_FILES['ourstory_img']['name'])) {
            $config['upload_path']   = './uploads/about/';
            $config['allowed_types'] = '*';
            $config['max_size']      = 10240;
            
            $this->upload->initialize($config); 
        
            if ($this->upload->do_upload('ourstory_img')) {
                $data['ourstory_img'] = $this->upload->data('file_name');
            }
        }
        

        $this->M_about->update($data);
        redirect('admin/about');
    }


    public function testi()
    {
        $data['testimoni'] = $this->M_testi->get_all_testimoni();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/testi', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_testi()
    {
        $data = [
            'nama'  => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->M_testi->insert_testimoni($data);
        redirect('admin/testi');
    }

    public function edit_testi()
    {
        $id = $this->input->post('id');
        $data = [
            'nama'  => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->M_testi->update_testimoni($id, $data);
        redirect('admin/testi');
    }

    public function hapus_testi($id)
    {
        $this->M_testi->delete_testimoni($id);
        redirect('admin/testi');
    }

    public function setting()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = [
                'instagram' => $this->input->post('instagram'),
                'facebook'  => $this->input->post('facebook'),
                'twitter'   => $this->input->post('twitter'),
                'youtube'   => $this->input->post('youtube'),
                'maps'      => $this->input->post('maps'),
                'alamat'    => $this->input->post('alamat'),
                'whatsapp'  => $this->input->post('whatsapp'),
                'email'     => $this->input->post('email')
            ];

            if ($this->M_setting->update_setting($data)) {
                $this->session->set_flashdata('success', 'Data berhasil diperbarui!');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui data.');
            }

            redirect('admin/setting');
        }

        $data['setting'] = $this->M_setting->get_setting();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/setting', $data);
        $this->load->view('admin/footer');
    }
    public function team()
    {
        $data['team'] = $this->M_team->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/team', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_team()
    {
        $config['upload_path']   = './uploads/team/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 10240;
        $this->upload->initialize($config);

        $data = [
            'nama'  => $this->input->post('nama'),
            'peran' => $this->input->post('peran')
        ];

        if ($this->upload->do_upload('gambar')) {
            $data['gambar'] = $this->upload->data('file_name');
        }

        $this->M_team->insert($data);
        $this->session->set_flashdata('success', 'Anggota tim berhasil ditambahkan!');
        redirect('admin/team');
    }

    public function edit_team()
    {
        $id = $this->input->post('id');
        $team = $this->M_team->getById($id);
        echo json_encode($team);
    }

    public function update_team()
    {
        $id = $this->input->post('id');
        $data = [
            'nama'  => $this->input->post('nama'),
            'peran' => $this->input->post('peran')
        ];

        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path']   = './uploads/team/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 10240;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $data['gambar'] = $this->upload->data('file_name');
            }
        }

        $this->M_team->update($id, $data);
        $this->session->set_flashdata('success', 'Anggota tim berhasil diperbarui!');
        redirect('admin/team');
    }

    public function hapus_team($id)
    {
        $this->M_team->delete($id);
        $this->session->set_flashdata('success', 'Anggota tim berhasil dihapus!');
        redirect('admin/team');
    }

    public function contact() {
        $data['contacts'] = $this->M_contact->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view('admin/contact', $data);
        $this->load->view('admin/footer');
    }

    public function edit_status() {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $this->M_contact->update_status($id, $status);
        redirect('admin/contact');
    }

    public function hapus($id) {
        $this->M_contact->delete($id);
        redirect('admin/contact');
    }
}
?>
