<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index(): string
    {
        return view('commons/admin/inc/header') . view('commons/admin/inc/sidebar') . view('commons/admin/pages/dashboard/index') . view('commons/admin/inc/footer');
    }
}
