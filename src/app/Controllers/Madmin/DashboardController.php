<?php

namespace App\Controllers\Madmin;

use App\Controllers\MadminController;
use CodeIgniter\Config\Services;

class DashboardController extends MadminController
{
    private function _setRenderSection($viewRenderer, $sectionName, $viewName, $data = []) {
        $viewRenderer->section($sectionName);
        echo view($viewName, $data);
        $viewRenderer->endSection($sectionName);
    }
    public function index()
    {
        $view = Services::renderer();

        // Set the title
        $view->setVar('title', 'AdminLTE 3 | Dashboard 2');

        // Set the content and script sections
        $this->_setRenderSection($view, 'content', 'commons/admin/inc/dashboard/content');
        $this->_setRenderSection($view, 'script', 'commons/admin/inc/dashboard/script');

        return $view->render('commons/admin/pages/dashboard/layout');
    }
}