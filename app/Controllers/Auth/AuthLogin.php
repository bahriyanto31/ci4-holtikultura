<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\ModelUsers;
use CodeIgniter\Exceptions\PageNotFoundException;

class AuthLogin extends BaseController
{
    public function index()
    {
        // validate csrf token
        if (service('validateCSRF_auth')) {
            $db = new ModelUsers();
            $user = request()->getVar('username');
            $pass = request()->getVar('password');
            // cek authentication
            $cek = $db->cek_auth($user, $pass);
            if ($cek) {
                // update log in table users
                $db->log_user($cek['id']);
                // set session data
                session()->islogin = true;
                $ses_data = [
                    'kon_id'        => $cek['kon_id'],
                    'name'          => $cek['name'],
                    'level'         => $cek['level'],
                    'last_login'    => $cek['last_login'],
                ];
                session()->set($ses_data);
                return redirect()->to('web/dashboard')->with('notif_toast', [
                    'sts' => 1,
                    'titl' => "Selamat Datang $ses_data[name]",
                    'msg' => "Berhasil login.",
                ]);
            } else {
                // user not found
                return redirect()->to('')->with('notif_form_auth', [
                    'sts' => 0,
                    'msg' => "Username & Password tidak ditemukkan.",
                ]);
            }
        }
        // return 404 page not found.
        throw PageNotFoundException::forPageNotFound();
    }

    public function logout()
    {
        session()->islogin = false;
        session()->destroy();
        return redirect()->to('');
    }
}
