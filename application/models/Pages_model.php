<?php
class Pages_model extends CI_Model
{
    public function getLatestArticle($limit, $start)
    {

        $this->db->where('status', '1');
        $this->db->order_by('tanggal_publikasi', 'ASC');
        return $this->db->get('artikel', $limit, $start)->result_array();
    }
    public function getResultArticle($limit, $start, $keyword)
    {
        $this->db->like('judul_artikel', $keyword);
        $this->db->where('status', '1');
        $this->db->order_by('tanggal_publikasi', 'DESC');
        return $this->db->get('artikel', $limit, $start)->result_array();
    }
    public function totalLatestArticle()
    {
        $this->db->where('status', '1');
        $this->db->order_by('tanggal_publikasi', 'ASC');
        return $this->db->get('artikel')->num_rows();
    }
    public function totalResultArticle($keyword)
    {
        $this->db->like('judul_artikel', $keyword);
        $this->db->where('status', '1');
        $this->db->order_by('tanggal_publikasi', 'DESC');
        return $this->db->get('artikel')->num_rows();
    }

    public function configPagination($which)
    {

        //konfigurasi pagination
        $config['total_rows'] = $which; //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $config["num_pages"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['first_link']       = '&laquo;';
        $config['last_link']        = '&laquo;';
        $config['next_link']        = '&gt;';
        $config['prev_link']        = '&lt;';
        $config['full_tag_open']    = '<div class="row justify-content-center"><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '</span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link" aria-label="Next">';
        $config['next_tag_close']  = '</span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';

        return $config;
    }
    public function getPopular()
    {
        $this->db->where('status', '1');
        $this->db->order_by('views', 'DESC');
        return $this->db->get('artikel', 4)->result_array();
    }
    public function getProfile($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row();
    }
    public function getListUser($kategori)
    {
        return $this->db->get_where('users', ['kategori' => $kategori]);
    }
    public function getRecUser()
    {
        $this->db->limit(4);
        $this->db->order_by('id_user', 'RANDOM');
        return $this->db->get_where('users', ['kategori' => 'Anggota']);
    }
    public function getPortofolio($id)
    {
        return $this->db->get_where('portofolio', ['id_user' => $id])->result_array();
    }
}
