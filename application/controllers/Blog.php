<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->model('pages_model');
        $this->load->library('pagination');
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function kategori($slug_kategori)
    {
        $data['cat'] = $slug_kategori;
        $data['namaKategori'] = getCategoryNameBySlug($slug_kategori);
        $data['title'] = 'ANSORA-' . $data['namaKategori'];

        $config = $this->blog_model->configPagination($slug_kategori);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['listArtikel'] = $this->blog_model->getListArticleByCat($slug_kategori, $config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();

        $data['popular'] = $this->pages_model->getPopular();
        $data['sidebar'] = $this->load->view('pages/templates/sidebar', $data, TRUE);
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/kategori', $data);
        $this->load->view('pages/templates/page_footer');
    }
    public function read($slug_artikel)
    {
        $data['artikel'] = $this->blog_model->getArticleBySlug($slug_artikel);
        $data['title'] = 'ANSORA-' . $data['artikel']->judul_artikel;
        $data['kategori'] = $data['artikel']->kategori;
        $data['suggested'] = $this->blog_model->suggestedArticle($data['kategori']);
        $data['namaKategori'] = getCategoryNameBySlug($data['kategori']);
        $data['popular'] = $this->pages_model->getPopular();
        $data['sidebar'] = $this->load->view('pages/templates/sidebar', $data, TRUE);
        $this->load->view('pages/templates/page_header', $data);
        $this->load->view('pages/read', $data);
        $this->load->view('pages/templates/page_footer');
    }
}
