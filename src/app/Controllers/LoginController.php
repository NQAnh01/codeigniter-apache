<?php

namespace App\Controllers;
use CodeIgniter\Config\Services;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('commons/admin/auth/login');
    }
}
