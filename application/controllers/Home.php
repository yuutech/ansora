<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }
    public function index()
    {
        $data['latest'] = $this->home_model->getLatestArticle();
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('pages/templates/page_footer');
    }
}
