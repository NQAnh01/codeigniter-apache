<?php

namespace App\Controllers\Madmin;

use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends MadminController
{
    public function index()
    {
        return $this->renderView('admin/dashboard/home');
    }
}
