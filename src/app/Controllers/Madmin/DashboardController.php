<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;

class DashboardController extends MadminController
{
    public function index(): string
    {
        $data['content'] = view('commons/admin/inc/dashboard/content');
        return view('commons/admin/pages/dashboard/index', $data);
    }
}
