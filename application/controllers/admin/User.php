<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        is_logged_in();
        if ($this->session->userdata('level') !== '1') {
            redirect('auth/blocked');
        }
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'ANSORA CMS - Daftar User';
        $data['daftar_user'] = $this->db->get('users')->result_array();
        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/user/index", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function tambah_user()
    {
        $data['title'] = 'ANSORA CMS - Buat User';
        $user = $this->user_model;
        if ($this->form_validation->set_rules($user->rulesUser())->run()) {
            $user->simpanUser();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">User Berhasil di Buat!</div>'
            );
            redirect('admin/user');
        }

        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/user/tambah", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function edit_user($id)
    {
        $data['title'] = 'ANSORA CMS - Edit User';
        $data['userr'] = $this->db->get_where('users', ['id_user' => $id])->row_array();

        $user = $this->user_model;

        if ($this->form_validation->set_rules($user->rulesEditUser())->run()) {
            $user->editUser($id);
            redirect('admin/user');
        }

        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/user/edit", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function hapus_user($id)
    {
        $this->user_model->deleteUser($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">User Berhasil di Hapus!</div>'
        );
        redirect('admin/user');
    }
}
