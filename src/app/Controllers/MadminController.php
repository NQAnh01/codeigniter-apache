<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services;


class MadminController extends BaseController
{
    //
    public function renderView($viewContent, $data = [])
    {

        $view = Services::renderer();
        $user = session()->get('user');
        $data['user'] = $user;

        $view->setVar('title', $data['title']);
        //header
        $this->_setRenderSection($view, 'header', 'commons/admin/inc/header', $data);
        //sidebar
        $this->_setRenderSection($view, 'sidebar', 'commons/admin/inc/sidebar', $data);
        //breadcrumb
        $this->_setRenderSection($view, 'breadcrumb', 'commons/admin/inc/breadcrumb', $data);
        //content
        $this->_setRenderSection($view, 'content', $viewContent, $data);
        //footer
        $this->_setRenderSection($view, 'footer', 'commons/admin/inc/footer', $data);
        //script
        $this->_setRenderSection($view, 'pageScript', 'commons/admin/pages/script', $data);
    
        // Render view chính
        return $view->render('commons/admin/pages/layout');

    }
}
