<?php
class Home_model extends CI_Model
{
    public function getLatestArticle()
    {

        $this->db->where('status', '1');
        $this->db->order_by('tanggal_publikasi', 'ASC');
        return $this->db->get('artikel')->result_array();
    }
}
