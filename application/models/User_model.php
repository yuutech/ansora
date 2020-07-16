<?php
class User_model extends CI_Model
{
    private $_table = "users";

    public function rulesUser()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => array('is_unique' => 'Username telah dipakai')
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[users.email]',
                'errors' => array('is_unique' => 'Email telah didaftarkan')
            ],
            [
                'field' => 'kategori',
                'label' => 'Kategori',
                'rules' => 'required'
            ],
        ];
    }
    public function rulesEditUser()
    {
        // rules untuk edit, soalnya bakal bentrok di is_unique
        $id = $this->uri->segment(4);
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
    public function getUserBy($id)
    {
        return $this->db->get_where('users', ["id_user" => $id])->row();
    }

    public function simpanUser()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = password_hash('user', PASSWORD_DEFAULT);
        $kategori = $this->input->post('kategori');
        $narahubung = $this->input->post('narahubung');
        $kontak_narahubung = $this->input->post('kontak_narahubung');
        $foto = $this->_uploadImage();
        $level = $this->input->post('level') == (1) ? 1 : 2;
        $telepon = $this->input->post('telepon');
        $website = $this->input->post('website');
        $profesi = $this->input->post('profesi');
        $info = $this->input->post('info');
        $fb = trim($this->input->post('fb'));
        $ig = trim($this->input->post('ig'));
        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $pass,
            'email' => $email,
            'kategori' => $kategori,
            'id_level' => $level,
            'narahubung' => $narahubung,
            'kontak_narahubung' => $kontak_narahubung,
            'foto' => $foto,
            'telepon' => $telepon,
            'website' => $website,
            'profesi' => $profesi,
            'info' => $info,
            'fb' => $fb,
            'ig' => $ig,
            'is_active' => 1,
        ];

        return $this->db->insert($this->_table, $data);
    }
    public function editUser($id)
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = password_hash('user', PASSWORD_DEFAULT);
        $kategori = $this->input->post('kategori');
        $narahubung = $this->input->post('narahubung');
        $kontak_narahubung = $this->input->post('kontak_narahubung');
        $old_image = $this->input->post("old_image");
        if (!empty($_FILES["gambar"]["name"])) {
            if ($old_image != "profile_user.svg") {
                unlink(FCPATH . 'assets/img/upload/profile/' . $old_image);
            }
            $foto = $this->_uploadImage();
        } else {
            $foto = $old_image;
        }
        $level = $this->input->post('level') == (1) ? 1 : 2;
        $telepon = $this->input->post('telepon');
        $website = $this->input->post('website');
        $profesi = $this->input->post('profesi');
        $info = $this->input->post('info');
        $fb = trim($this->input->post('fb'));
        $ig = trim($this->input->post('ig'));
        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $pass,
            'email' => $email,
            'kategori' => $kategori,
            'id_level' => $level,
            'narahubung' => $narahubung,
            'kontak_narahubung' => $kontak_narahubung,
            'foto' => $foto,
            'telepon' => $telepon,
            'website' => $website,
            'profesi' => $profesi,
            'info' => $info,
            'fb' => $fb,
            'ig' => $ig,
            'is_active' => 1,
        ];
        return $this->db->update('users', $data, array('id_user' => $id));
    }
    public function deleteUser($id)
    {
        $this->_deleteImage($id);
        return $this->db->where('id_user', $id)->delete('users');
    }
    private function _uploadImage()
    {
        // . $this->input->post('kategori') . '/'
        $config['upload_path'] = './assets/img/upload/profile';
        $config['allowed_types'] = 'gif|jpg|png|svg';
        $config['file_name'] = $this->input->post('username');
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1MB
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $this->load->library('upload', $config);


        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
        return "profile_user.svg";
    }
    private function _deleteImage($id)
    {
        $profile = $this->getUserBy($id);
        if ($profile->foto != "profile_user.svg") {
            $filename = explode(".", $profile->foto)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/upload/profile/$filename.*"));
        }
    }
}
