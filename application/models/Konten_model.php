<?php
class Konten_model extends CI_Model
{

    public function rulesArtikel()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required|is_unique[artikel.judul_artikel]', [
                    'is_unique' => 'This email has already registered!'
                ]
            ],
        ];
    }
    // ini pribadi

    public function slug($asal)
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $asal)));
    }
    public function simpanArtikel()
    {
        $judul = $this->input->post('judul');
        $status = $this->input->post('status');
        $slug = $this->slug($judul);
        $user_active = get_userdata()['nama'];
        if ($status == 1) {
            $tanggal_publish = date('Y-m-d');
            $jam_publish = date('H:i:s');
        } else {
            $tanggal_publish = NULL;
            $jam_publish = NULL;
        }
        $gambar = $this->_uploadImage();
        $view = rand(20, 1000);
        $data = [
            'kategori' => $this->input->post('kategori'),
            'judul_artikel' => $judul,
            'gambar' => $gambar,
            'isi_artikel' => $this->input->post('content'),
            'status' => $status,
            'slug_artikel' => $slug,
            'penulis' => $user_active,
            'jam_publikasi' => $jam_publish,
            'views' => $view,
            'tanggal_publikasi' => $tanggal_publish,
        ];
        return $this->db->insert('artikel', $data);
    }
    public function editArtikel($id)
    {
        $judul = $this->input->post('judul');
        $status = $this->input->post('status');
        $slug = $this->slug($judul);
        $user_active = get_userdata()['nama'];
        if ($status == 1) {
            $tanggal_publish = date('Y-m-d');
            $jam_publish = date('H:i:s');
        } else {
            $tanggal_publish = NULL;
            $jam_publish = NULL;
        }
        $old_image = $this->input->post["old_image"];
        if (!empty($_FILES["gambar"]["name"])) {
            if ($old_image != "default-arc.png") {
                unlink(FCPATH . 'assets/img/upload/artikel/' . $old_image);
            }
            $gambar = $this->_uploadImage();
        } else {
            $gambar = $this->input->post["old_image"];
        }
        $data = [
            'kategori' => $this->input->post('kategori'),
            'judul_artikel' => $judul,
            'gambar' => $gambar,
            'isi_artikel' => $this->input->post('content'),
            'status' => $status,
            'slug_artikel' => $slug,
            'penulis' => $user_active,
            'jam_publikasi' => $jam_publish,
            'tanggal_publikasi' => $tanggal_publish,
        ];
        return $this->db->update('artikel', $data, array('id_artikel' => $id));
    }
    public function deleteArtikel($id)
    {
        $this->_deleteImage($id);
        return $this->db->where('id_artikel', $id)->delete('artikel');
    }


    public function getArtikelById($id)
    {
        return $this->db->get_where('artikel', ["id_artikel" => $id])->row();
    }
    private function _uploadImage()
    {
        // . $this->input->post('kategori') . '/'
        $config['upload_path'] = './assets/img/upload/artikel';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->slug($this->input->post('judul'));
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "default-arc.png";
    }
    private function _deleteImage($id)
    {
        $artikel = $this->getArtikelById($id);
        if ($artikel->gambar != "default-arc.png") {
            $filename = explode(".", $artikel->gambar)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/upload/artikel/$filename.*"));
        }
    }
}
