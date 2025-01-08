<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        // Jika sudah login, redirect langsung ke dashboard sesuai role
        if (session()->get('isLoggedIn')) {
            return $this->redirectBasedOnRole();
        }
        
        return view('/login');
    }
    
    public function processLogin()
    {
        $userModel = new UserModel();

        // Ambil input username dan password
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek apakah username (email/username) ada di database
        $user = $userModel->where('username', $username)->orWhere('email', $username)->first();

        // Cek password jika user ditemukan
        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
        }

        // Set session jika login berhasil
        session()->set([
            'isLoggedIn' => true,
            'userId'     => $user['id'],
            'username'   => $user['username'],
            'role'       => $this->getRole($user['level_id']),
        ]);

        return $this->redirectBasedOnRole();
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

    private function redirectBasedOnRole()
    {
        $role = session()->get('role');
        if ($role === 'superadmin') {
            return redirect()->to('/home');  // Redirect ke rute yang sesuai
        } elseif ($role === 'admin') {
            return redirect()->to('/home');    // Redirect ke rute yang sesuai
        } else {
            return redirect()->to('/home');  // Redirect ke rute yang sesuai
        }
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
            'level_id' => 3,
        ];

        // Insert user data
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
