<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;

class DashboardController extends MadminController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard v2',
        ];

        echo $this->loadView('commons/admin/inc/dashboard/content', $data);
    }

    public function loadView($view, $data = [])
    {
        $data['content'] = view($view, $data);
        return view('commons/admin/pages/dashboard/index', $data);
    }
}
