<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("auth_model");
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'ANSORA CMS - Dashboard';

        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/index", $data);
        $this->load->view("admin/templates/cms_footer");
    }
}
