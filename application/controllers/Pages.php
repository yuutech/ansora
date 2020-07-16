<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('pages_model');
    }
    public function index()
    {
        $data['title'] = 'ANSORA';
        $pages = $this->pages_model;


        $config = $pages->configPagination($pages->totalLatestArticle());

        $config['base_url'] = base_url('pages/index'); //site url
        $config["uri_segment"] = 3;  // uri parameter
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['latest'] = $this->pages_model->getLatestArticle($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $data['popular'] = $this->pages_model->getPopular();
        $data['sidebar'] = $this->load->view('pages/templates/sidebar', $data, TRUE);
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/index', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function member()
    {
        $data['title'] = 'ANSORA-Anggota';
        $data['memStudio'] = $this->pages_model->getListUser('Studio')->result_array();
        $data['memKomun'] = $this->pages_model->getListUser('Komunitas')->result_array();
        $data['memAnggota'] = $this->pages_model->getListUser('Anggota')->result_array();
        $data['memLPK'] = $this->pages_model->getListUser('Lembaga Pendidikan')->result_array();
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/member', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function about()
    {
        $data['title'] = 'ANSORA-Tentang Kami';
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function profil($username)
    {
        $data['title'] = 'ANSORA-Profil';
        $data['data_user'] = $this->pages_model->getProfile($username);
        $data['portofolio'] = $this->pages_model->getPortofolio($data['data_user']->id_user);
        $data['rec_user'] = $this->pages_model->getRecUser()->result_array();
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/profil', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function search()
    {
        $data['title'] = 'ANSORA-Search';
        $data['keyword'] = $this->input->get('keyword');
        $keyword = $data['keyword'];
        $pages = $this->pages_model;
        $data['total'] = $pages->totalResultArticle($keyword);

        $config = $pages->configPagination($pages->totalResultArticle($keyword));
        $config['base_url'] = base_url('pages/search'); //site url
        $config["uri_segment"] = 3;  // uri parameter
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['resultArticle'] = $pages->getResultArticle($config["per_page"], $data['page'], $keyword);
        $data['pagination'] = $this->pagination->create_links();

        $data['popular'] = $pages->getPopular();
        $data['sidebar'] = $this->load->view('pages/templates/sidebar', $data, TRUE);
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/search', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function terms()
    {
        $data['title'] = 'ANSORA-Syarat dan Ketentuan';
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/terms', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function register()
    {
        $data['title'] = 'ANSORA-Mari Bergabung';
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/register', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function tanya()
    {
        $data['title'] = 'ANSORA-Ada Pertanyaan?';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('pages/tanya', $data);
        $this->load->view('auth/templates/auth_footer');
    }
    public function saran()
    {
        $data['title'] = 'ANSORA-Saran';
        $this->load->view('auth/templates/auth_header', $data);
        $this->load->view('pages/saran', $data);
        $this->load->view('auth/templates/auth_footer');
    }
    public function galeri()
    {
        $data['title'] = 'ANSORA-Galeri';
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/galeri', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function notfound()
    {
        $data['title'] = 'Page Not Found';
        $this->load->view('pages/404', $data);
    }
}
