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
        $data['script'] = Services::renderer()->render('commons/admin/inc/dashboard/script');
        return view('commons/admin/pages/dashboard/index', $data); //index page extend layout
    }
    public function news()
    {
        $data['title'] = 'AdminLTE 3 | NEWS';
        $data['content'] = Services::renderer()->render('commons/admin/inc/news/content');
        $data['script'] = Services::renderer()->render('commons/admin/inc/news/script');
        return view('commons/admin/pages/dashboard/index', $data); //index page extend layout
    }
    public function category()
    {
        $data['title'] = 'AdminLTE 3 | Category';
        $data['content'] = Services::renderer()->render('commons/admin/inc/category/content');
        $data['script'] = Services::renderer()->render('commons/admin/inc/category/script');
        return view('commons/admin/pages/dashboard/index', $data); //index page extend layout
    }
}
