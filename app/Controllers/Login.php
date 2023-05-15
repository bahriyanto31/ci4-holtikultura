<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if (session()->islogin) {
            return redirect()->to('/web/dashboard');
        }
        return view('v_login');
    }
}
