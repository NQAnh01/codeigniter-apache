<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;
use CodeIgniter\Config\Services;

class DashboardController extends MadminController
{
    public function renderDashboard()
    {
        $data = [
            'title' => 'AdminLTE 3 | Dashboard 2',
            'content' => 'commons/admin/inc/dashboard/content',
            'script' => 'commons/admin/inc/dashboard/script'
        ];

        return $this->renderView('commons/admin/pages/dashboard/layout', $data);
    }
}