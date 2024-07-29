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
            'breadcrumb_active' => 'Dashboard 2',
        ];

        return $this->renderView('commons/admin/pages/dashboard/home/index', $data);
       
    }
    
    public function renderGalley()
    {
        $data = [
            'title' => 'AdminLTE 3 | Galley',
            'breadcrumb_active' => 'Galley',
        ];

        return $this->renderView('commons/admin/pages/galley/content', $data);
    }

}