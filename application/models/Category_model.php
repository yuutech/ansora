<?php
class Category_model extends CI_Model
{
    public function rulesKategori()
    {
        return [
            [
                'field' => 'nama_cat',
                'label' => 'Nama Kategori',
                'rules' => 'required'
            ]
        ];
    }
    public function slug($asal)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $asal)));
    }
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }
    public function simpanKategori()
    {
        $nama = $this->input->post('nama_cat');
        $slug = $this->slug($nama);
        $data = [
            'nama_cat' => $nama,
            'slug_cat' => $slug
        ];
        return $this->db->insert('kategori', $data);
    }
    public function editKategori($id)
    {
        $data = [
            'nama_cat' => $this->input->post('nama_cat'),
            'slug_cat' => $this->input->post('slug_cat')
        ];
        return $this->db->update('kategori', $data, array('id_cat' => $id));
    }
    public function hapusKategori($id)
    {
        return $this->db->where('id_cat', $id)->delete('kategori');
    }
}
