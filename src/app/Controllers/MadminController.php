<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MadminController extends BaseController
{
    public function index()
    {
        return view('commons/admin/index');
    }
}
