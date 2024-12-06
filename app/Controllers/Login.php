<?php 

namespace App\Controllers;

use Myth\Auth\Config\Auth as AuthConfig;
// use Myth\Auth\Authentication\Authentication;

class Login extends BaseController
{
    public function index()
    {
        // Cek session
        if (session()->get('isLoggedIn')) {
            dd(session()->get('isLoggedIn')); // Cek nilai session 'isLoggedIn'
            return redirect()->to('/pages/home'); // Redirect ke halaman 'home'
        }

        $data = [
            'config' => config(AuthConfig::class),
            'title' => 'Login | Pengajuan Usulan Kerja Sama'
        ];

        return view('/auth/login', $data);
    }

    public function processLogin() 
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $authentication = service('authentication'); // Instance Authentication
        $result = $authentication->attempt($email, $password);

        // Cek hasil login
        dd($result); // Cek nilai $result

        if ($result) {
            // Login berhasil
            session()->set('isLoggedIn', true); // Set session 'isLoggedIn'
            dd(session()->get('isLoggedIn')); // Cek nilai session 'isLoggedIn'
            return redirect()->to('/pages/home'); // Redirekt ke halaman 'home'
        } else {
            // Login gagal
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }
    }

    public function register()
    {
        $data = [
            'config' => config(AuthConfig::class),
            'title' => 'Registrasi | Pengajuan Usulan Kerja Sama'
        ];
        
        return view('/auth/register', $data);
    }
    
    public function forgot()
    {
        $data = [
            'config' => config(AuthConfig::class),
            'title' => 'Lupa Password | Pengajuan Usulan Kerja Sama'
        ];
        
        return view('/auth/forgot', $data);
    }

    public function logout()
    {
        session()->remove('isLoggedIn'); 
        return redirect()->to('/login'); 
    }
}