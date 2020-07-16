<?php

class Konten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("auth_model");
        is_logged_in();
        $this->load->model("konten_model");
        $this->load->library('form_validation');
        // $this->load->helper('form');
    }
    public function index()
    {
        $data['title'] = 'ANSORA CMS - Daftar Artikel';
        $data['daftar_artikel'] = $this->db->get('artikel')->result_array();
        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/konten/index", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function buat_artikel()
    {
        $data['title'] = 'ANSORA CMS - Buat Artikel';
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $konten = $this->konten_model;
        if ($this->form_validation->set_rules($konten->rulesArtikel())->run()) {
            $konten->simpanArtikel();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Artikel Berhasil di Buat!</div>'
            );
            redirect('admin/konten');
        }

        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/konten/buat_artikel", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function edit_artikel($id)
    {
        $data['title'] = 'ANSORA CMS - Edit Artikel';
        $data['artikel'] = $this->db->get_where('artikel', ['id_artikel' => $id])->row_array();
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $konten = $this->konten_model;

        if ($this->form_validation->set_rules($konten->rulesArtikel())->run()) {
            $konten->editArtikel($id);
            redirect('admin/konten');
        }
        // tampilkan halaman dashboard
        $this->load->view("admin/templates/cms_header", $data);
        $this->load->view("admin/konten/edit_artikel", $data);
        $this->load->view("admin/templates/cms_footer");
    }
    public function hapus_artikel($id)
    {
        $this->konten_model->deleteArtikel($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Artikel Berhasil di Hapus!</div>'
        );
        redirect('admin/konten/index');
    }
}
