<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("auth_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->auth_model->doLogin()) redirect('admin/dashboard');
        }


        // tampilkan halaman login
        $this->load->view("auth/templates/auth_header");
        $this->load->view("auth/login");
        $this->load->view("auth/templates/auth_footer");
    }
    public function register()
    {
        $data['title'] = 'ANSORA-Mari Bergabung';
        $user = $this->auth_model;
        if ($this->form_validation->set_rules($user->rulesUser())->run()) {
            $user->simpanUser();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Pendaftaran Berhasil!</div>'
            );
            redirect('auth/register');
        }

        // tampilkan halaman login
        $this->load->view("pages/templates/page_header", $data);
        $this->load->view("auth/register", $data);
        $this->load->view("pages/templates/page_footer");
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect('auth/index');
    }
    public function blocked()
    {
        $this->load->view('blocked');
    }
}
