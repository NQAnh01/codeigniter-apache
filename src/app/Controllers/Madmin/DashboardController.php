<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;
use CodeIgniter\Config\Services;

class DashboardController extends MadminController
{
    public function index()
    {
        $data['title'] = 'AdminLTE 3 |Dashboard v2';
        $data['content'] = Services::renderer()->render('commons/admin/inc/dashboard/content');
        return view('commons/admin/pages/dashboard/index', $data);
    }
}
