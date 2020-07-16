<?php
class Auth_model extends CI_Model
{
    private $_table = "users";

    public function rulesUser()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'error' => array('is_unique' => 'Username telah dipakai')
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
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[3]|matches[rpass]',
                'errors' => array(
                    'matches' => 'Password tidak sama!',
                    'min_length' => 'Password terlalu pendek!'
                )
            ],
            [
                'field' => 'rpass',
                'label' => 'Password',
                'rules' => 'required|trim|matches[pass]',
                'errors' => array(
                    'matches' => 'Password tidak sama!',
                )
            ],
            [
                'field' => 'kategori',
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Pilih Kategori Dahulu!',
                )
            ],
            [
                'field' => 'kontak_narahubung',
                'label' => 'Kontak Narahubung',
                'rules' => 'max_length[15]'
            ],
        ];
    }

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["username"])
            ->or_where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();
        // var_dump($user);
        // die();
        // jika user terdaftar
        if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa level-nya
            // $isAdmin = $user->id_level == 1;

            // jika password benar dan dia admin
            if ($isPasswordTrue) {
                // $this->session->set_userdata(['user_logged' => $user]);
                $this->session->set_userdata('nama', $user->nama);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('level', $user->id_level);
                $this->session->set_userdata('foto', $user->foto);
                return true;
            }
        }

        // login gagal
        return false;
    }
    public function simpanUser()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = password_hash($this->input->post('pass'), PASSWORD_DEFAULT);
        $kategori = $this->input->post('kategori');
        $narahubung = $this->input->post('narahubung');
        $kontak_narahubung = $this->input->post('kontak_narahubung');
        $foto = 'profile_user.svg';
        $data = [
            'username' => $username,
            'nama' => $nama,
            'password' => $pass,
            'email' => $email,
            'kategori' => $kategori,
            'id_level' => 2,
            'narahubung' => $narahubung,
            'kontak_narahubung' => $kontak_narahubung,
            'foto' => $foto,
            'is_active' => 1,
        ];

        return $this->db->insert($this->_table, $data);
    }
}
