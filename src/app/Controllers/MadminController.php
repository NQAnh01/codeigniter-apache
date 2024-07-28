<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services;


class MadminController extends BaseController
{
    //
    // protected $_data = [];

    // public function __construct()
    // {
    //     $this->_data = [
    //         'title' => 'Default Title',
    //         'content' => 'default/content',
    //         'script' => 'default/script'
    //     ];
    // }
    public function renderView($viewContent, $data = [])
    {
        $view = Services::renderer();

        $view->setVar('title', $data['title']);
        $this->_setRenderSection($view, 'content', $data['content'], $data);
        $this->_setRenderSection($view, 'script', $data['script'], $data);
    
        // Render view chính
        return $view->render($viewContent);
    }
}
