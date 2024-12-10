<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleAdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Jika pengguna belum login dan tidak berada di halaman login atau proses login
        if (!$session->get('isLoggedIn') && !in_array($request->uri->getPath(), ['auth-login', 'process_login'])) {
            return redirect()->to(base_url('auth-login'))->with('error', 'Silakan login terlebih dahulu.');
        }

        // Jika pengguna sudah login tetapi tidak memiliki role Admin (role_id = 1) dan sedang mengakses halaman admin
        if ($session->get('isLoggedIn') && $session->get('role_id') != 3 && strpos($request->uri->getPath(), 'User') !== false) {
            // Hancurkan session pengguna jika mencoba mengakses halaman admin tanpa hak akses
            $session->destroy();
            return redirect()->to(base_url('auth-login'))->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada tindakan setelah request
    }
}
