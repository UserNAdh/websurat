<?php

namespace App\Controllers;

use App\Models\MUser;
use App\Models\MAuth;

class Auth extends BaseController
{
    public function register()
    {
        $val = $this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => '{field} sudah digunakan.',
                    ]
                ],
                'email' => 'required',
                'password' => 'required'
            ]
        );

        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
        };

        $data = array(
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        );

        $model = new MUser;
        $model->insert($data);
        session()->setFlashdata('pesan', 'Anda telah berhasil registrasi. Silahkan Login.');
        return redirect()->to('/admin');
    }

    public function login()
    {
        $model = new MAuth;
        $table = 'user';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);
        if ($row == NULL) {
            session()->setFlashdata('pesan', 'Username anda salah.');
            return redirect()->to('/admin');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'username' => $row->username
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil Login.');
            return redirect()->to('/admin/home');
        }
        session()->setFlashdata('pesan', 'Password Salah.');
        return redirect()->to('/admin');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil Logout.');
        return redirect()->to('/admin');
    }
}
