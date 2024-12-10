<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('/login');
    }
    
    public function processLogin()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->orWhere('email', $username)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
        }

        // Set session
        session()->set([
            'isLoggedIn' => true,
            'userId'     => $user['id'],
            'username'   => $user['username'],
            'role'       => $this->getRole($user['level_id']),
        ]);

        // Redirect berdasarkan role
        if (session()->get('role') === 'superadmin') {
            return redirect()->to('/dashboard/superadmin');
        } elseif (session()->get('role') === 'admin') {
            return redirect()->to('/dashboard/admin');
        } else {
            return redirect()->to('/dashboard/user');
        }
    }

    private function getRole($levelId)
    {
        $roles = [
            1 => 'superadmin',
            2 => 'admin',
            3 => 'user',
        ];

        return $roles[$levelId] ?? 'user';
    }

    public function register()
    {
        return view('/register');
    }

    public function processRegister()
    {
        $userModel = new \App\Models\UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level_id' => 3, // Default user
        ];

        $userModel->insert($data);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function forgot()
    {
        return view('/forgot');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
