<?php
class Blog_model extends CI_Model
{
    public function getListArticleByCat($slug_cat, $limit, $start)
    {

        $this->db->where(['status' => '1', 'kategori' => $slug_cat]);
        $this->db->order_by('tanggal_publikasi', 'ASC');
        return $this->db->get('artikel', $limit, $start)->result_array();
    }
    public function getArticleBySlug($slug)
    {
        $this->db->where('slug_artikel', $slug);
        return $this->db->get('artikel')->row();
    }
    public function totalArticleByCategory($slug_cat)
    {
        $this->db->where(['status' => '1', 'kategori' => $slug_cat]);
        $this->db->order_by('tanggal_publikasi', 'ASC');
        return $this->db->get('artikel')->num_rows();
    }
    public function configPagination($slug_cat)
    {

        $jumlah_data = $this->totalArticleByCategory($slug_cat);
        //konfigurasi pagination
        $config['base_url'] = base_url('kategori/' . $slug_cat); //site url
        $config['total_rows'] = $jumlah_data; //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
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
        $config['next_tagl_close']  = '</span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        return $config;
    }
    public function suggestedArticle($cat)
    {
        $this->db->where(['status' => '1', 'kategori' => $cat]);
        $this->db->order_by('id_artikel', 'RANDOM');
        return $this->db->get('artikel', 4)->result_array();
    }
}
