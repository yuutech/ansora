<?php
class Profile_model extends CI_Model
{
    public function rulesEditUser($id)
    {
        // rules untuk edit, soalnya bakal bentrok di is_unique
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|edit_unique[users.username.id_user.' . $id . ']',
                'errors' => array('edit_unique' => 'Username telah dipakai')
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|edit_unique[users.email.id_user.' . $id . ']',
                'errors' => array('edit_unique' => 'Email telah didaftarkan')
            ],
            [
                'field' => 'kategori',
                'label' => 'Kategori',
                'rules' => 'required'
            ],
        ];
    }
    public function getPortofolio($id)
    {
        return $this->db->get_where('portofolio', ['id_user' => $id]);
    }
    public function tambahPortofolio($id)
    {
        $id_user = $id;
        $nama_port = $this->input->post('nama_portofolio');
        $gambar = $this->_uploadImage();
        $data = [
            'id_user' => $id_user,
            'nama_portofolio' => $nama_port,
            'file' => $gambar,
        ];

        return $this->db->insert('portofolio', $data);
    }
    public function editPortofolio($id)
    {
        $nama_port = $this->input->post('nama_portofolio');
        $old_image = $this->input->post('old_image');
        if (!empty($_FILES["gambar"]["name"])) {
            unlink(FCPATH . 'assets/img/upload/portofolio/' . $old_image);
            $gambar = $this->_uploadImage();
        } else {
            $gambar = $old_image;
        }
        $data = [
            'nama_portofolio' => $nama_port,
            'file' => $gambar,
        ];
        return $this->db->update('portofolio', $data, array('id_portofolio' => $id));
    }
    public function deletePortofolio($id)
    {
        $this->_deleteImage($id);
        return $this->db->where('id_portofolio', $id)->delete('portofolio');
    }
    private function _uploadImage()
    {
        // . $this->input->post('kategori') . '/'
        $config['upload_path'] = './assets/img/upload/portofolio';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['file_name'] = $this->input->post('nama_portofolio');
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        return $this->upload->data("file_name");
    }
    private function _deleteImage($id)
    {
        $porto = $this->db->get_where('portofolio', ['id_portofolio' => $id]);
        $filename =  $porto->file;
        return array_map('unlink', glob(FCPATH . "assets/img/upload/portofolio/$filename"));
    }
}
