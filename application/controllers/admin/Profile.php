<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("auth_model");
        is_logged_in();
        $this->load->model("user_model");
        $this->load->model("profile_model");
        $this->load->library('form_validation');
        // $this->load->helper('form');
    }
    public function index()
    {
        $data['title'] = 'ANSORA CMS-Edit Profile';
        $data['profile'] = get_userdata();
        $id = get_userdata()['id_user'];
        $user = $this->user_model;

        if ($this->form_validation->set_rules($this->profile_model->rulesEditUser($id))->run()) {
            $user->editUser($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Edit Profile Berhasil!</div>'
            );
            redirect('admin/profile');
        }
        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/profile/index", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function portofolio()
    {
        $data['title'] = 'ANSORA CMS-Portofolio';
        $id = get_userdata()['id_user'];
        $data['portofolio'] = $this->profile_model->getPortofolio($id)->result_array();
        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/profile/portofolio", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function tambah_portofolio()
    {
        $id_user = get_userdata()['id_user'];
        $nama_port = $this->input->post('nama_portofolio');
        $gambar = $_FILES['gambar']['name'];
        if ($nama_port === '' or $gambar === '') {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">File atau Nama tidak boleh kosong!</div>'

            );
        } else {
            $this->profile_model->tambahPortofolio($id_user);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Portofolio Berhasil Dibuat!</div>'
            );
        }
        redirect('admin/profile/portofolio');
    }
    public function edit_portofolio($id)
    {
        $this->profile_model->editPortofolio($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Portofolio Berhasil Diedit!</div>'
        );
        redirect('admin/profile/portofolio');
    }
    public function hapus_portofolio($id)
    {
        $this->profile_model->deletePortofolio($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Portofolio Berhasil Dibuat!</div>'
        );
        redirect('admin/profile/portofolio');
    }
}
