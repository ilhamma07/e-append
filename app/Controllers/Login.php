<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('pages/login');
    }

    public function auth()
    {
        $session = session();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $this->userModel->where(['username' => $username])->first();

        if ($user) {
            $pass = $user['password'];
            $verify = password_verify($password, $pass);
            if ($verify) {
                $session_data = [
                    'id_user'   => $user['id_user'],
                    'username'  => $user['username'],
                    'nama'      => $user['nama'],
                    'jabatan'   => $user['jabatan'],
                    'logged_in' => true
                ];
                $session->set($session_data);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashData('msg', 'Password Salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashData('msg', 'Username tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    //--------------------------------------------------------------------

}
