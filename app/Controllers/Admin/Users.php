<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data['title'] = "Daftar Users Operator";
        return view('admin/v_users_operator', $data);
    }
}
