<?php

namespace App\Controllers\Madmin;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index()
    {
        return view('commons/admin/auth/index');
    }
}
