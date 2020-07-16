<?php

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("auth_model");
        is_logged_in();
        if ($this->session->userdata('level') !== '1') {
            redirect('auth/blocked');
        }
        $this->load->model("category_model");
        $this->load->library('form_validation');
        // $this->load->helper('form');
    }
    public function index()
    {
        $data['title'] = 'ANSORA CMS - Kategori Artikel';
        $data['daftar_kategori'] = $this->category_model->getAllKategori();

        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/konten/kategori", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function add_cat()
    {
        $konten = $this->category_model;
        if ($this->form_validation->set_rules($konten->rulesKategori())->run()) {
            $konten->simpanKategori();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Kategori Berhasil di Tambahkan!</div>'
            );
        }
        redirect('admin/category');
    }
    public function edit_cat($id)
    {
        $this->category_model->editKategori($id);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Kategori Berhasil di Edit!</div>'
        );
        redirect('admin/category');
    }
    public function hapus_cat($id)
    {
        $this->category_model->hapusKategori($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Kategori Berhasil di Hapus!</div>'
        );
        redirect('admin/category');
    }
}
