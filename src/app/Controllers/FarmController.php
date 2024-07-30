<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class FarmController extends BaseController
{
    protected $_data = [];

    public function __construct() {
        $this->_data = [];
    }

    public function renderView($viewContent, $data = [])
	{
		$_view = Services::renderer();
		
        $this->_setRenderSection($_view, 'header', 'farm/inc/header', $this->_data);
        $this->_setRenderSection($_view, 'content', $viewContent, $this->_data);
        $this->_setRenderSection($_view, 'footer', 'farm/inc/footer', $this->_data);
        
		return view('farm/main_temp');
	}
}
