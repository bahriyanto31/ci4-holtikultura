<?php

namespace App\Controllers\Sample;

use App\Controllers\BaseController;

class Datatables extends BaseController
{
    public function index()
    {
        return view('sample/datatables');
    }
}
