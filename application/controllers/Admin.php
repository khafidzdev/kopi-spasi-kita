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

        if (!$this->session->userdata('log_in_admin')) {
            redirect('admin');
        }
    }

    public function main()
    {
        $this->_load_view('admin/main');
    }

    public function menu()
    {
        $action = $this->input->post('action');

        if ($action == 'tambah') {
            return $this->tambah();
        } elseif ($action == 'update') {
            return $this->update();
        } elseif ($action == 'hapus') {
            return $this->hapus();
        }

        $data['menu'] = $this->M_menu->get_all();
        $this->_load_view('admin/menu', $data);
    }

    private function tambah()
    {
        $gambar = $this->_upload_gambar('gambar', 'menu');
        $data = [
            'nama'      => $this->input->post('nama'),
            'kategori'  => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga'     => $this->input->post('harga'),
            'gambar'    => $gambar
        ];

        $this->M_menu->insert($data);
        $this->session->set_flashdata('success', 'Menu berhasil ditambahkan!');
        redirect('admin/menu');
    }

    private function update()
    {
        $id = $this->input->post('id');
        $gambar = $this->_upload_gambar('gambar', 'menu', $this->input->post('gambar_lama'));

        $data = [
            'nama'      => $this->input->post('nama'),
            'kategori'  => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga'     => $this->input->post('harga'),
            'gambar'    => $gambar
        ];

        $this->M_menu->update($id, $data);
        $this->session->set_flashdata('success', 'Menu berhasil diperbarui!');
        redirect('admin/menu');
    }

    private function hapus()
    {
        $id = $this->input->post('id');
        $this->M_menu->delete($id);
        $this->session->set_flashdata('success', 'Menu berhasil dihapus!');
        redirect('admin/menu');
    }

    public function about()
    {
        $data['about'] = $this->M_about->get();
        $this->_load_view('admin/about', $data);
    }

    public function update_about()
    {
        $data = [
            'about_img'    => $this->_upload_gambar('about_img', 'about', $this->input->post('about_img_lama')),
            'about_desk'   => $this->input->post('about_desk'),
            'ourstory_img' => $this->_upload_gambar('ourstory_img', 'about', $this->input->post('ourstory_img_lama')),
            'ourstory_desk'=> $this->input->post('ourstory_desk')
        ];

        $this->M_about->update($data);
        redirect('admin/about');
    }

    private function _upload_gambar($field, $folder, $old_file = null)
    {
        if (!empty($_FILES[$field]['name'])) {
            $config = [
                'upload_path'   => "./uploads/$folder/",
                'allowed_types' => 'jpg|jpeg|png',
                'max_size'      => 10240,
                'overwrite'     => true
            ];

            $this->load->library('upload', $config);

            if ($old_file && file_exists("./uploads/$folder/$old_file")) {
                unlink("./uploads/$folder/$old_file");
            }

            if ($this->upload->do_upload($field)) {
                return $this->upload->data('file_name');
            }
        }
        return $old_file;
    }

    public function testi()
    {
        $data['testimoni'] = $this->M_testi->get_all_testimoni();
        $this->_load_view('admin/testi', $data);
    }

    public function add_testi()
    {
        $data = [
            'nama'  => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->M_testi->insert_testimoni($data);
        redirect('admin/testi');
    }

    public function update_testi()
    {
        $id = $this->input->post('id');
        $data = [
            'nama'  => $this->input->post('nama'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->M_testi->update_testimoni($id, $data);
        redirect('admin/testi');
    }

    public function delete_testi($id)
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
        $this->_load_view('admin/setting', $data);
    }

    private function _load_view($view, $data = [])
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/topbar');
        $this->load->view($view, $data);
        $this->load->view('admin/footer');
    }
}
?>
