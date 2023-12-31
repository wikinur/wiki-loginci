<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;
use App\Models\UserModel;

class AuthProsesController extends BaseController
{
    public function prosesRegister()
    {
        $validate = $this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} harus diisi',
                ],
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'kolom {field} harus diisi',
                    'is_unique' => 'kolom {field} tidak boleh sama',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kolom {field} harus diisi',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'kolom {field} harus diisi',
                    'valid_email' => 'format email harus valid',
                ],
            ],
            'image' => [
                // 'rules' => 'mime_in[image,image/jpg,image/png,image/jpeg]|max_size[5000]',
                'rules' => 'uploaded[image]',
                'errors' => [
                    // 'mime_in' => 'file ekstension harus jpg, jpeg, png',
                    // 'max_size' => 'Ukuran file maksimal 5 mb',
                    'uploaded' => 'upload gambar',
                ],
            ],
        ]);

        if (!$validate) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/register')->withInput();
        }

        $image = $this->request->getFile('image');
        // $newName = $image->getRandomName();
        $image->move(WRITEPATH . '..public/assets/uploads/images');

        $data = [
            'name' => $this->request->getVar('name'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'),
            // 'level' => $this->request->getVar('level'),
            'image' => $image->getName(),
        ];

        $model = new UserModel();
        $model->insert($data);
        session()->setFlashdata('sukses', 'Register Berhasil');
        return redirect()->to('/');
    }

    public function ProsesLogin()
    {
        $model = new AuthModel();
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);
        if ($row == null) {
            session()->setFlashdata('error', 'username anda salah');
            return redirect()->to('/');
        }

        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => true,
                'name' => $row->name,
                'username' => $row->username,
                // 'level' => $row->level,
            );
            session()->set($data);
            session()->setFlashdata('sukses', 'login Berhasil');
            return redirect()->to('/admin');
        }
        session()->setFlashdata('error', 'Password salah');
        return redirect()->to('/');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
