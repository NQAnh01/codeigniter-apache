<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;

class DashboardController extends MadminController
{
    public function index(): string
    {
        return view('commons/admin/pages/dashboard/index');
    }
}
