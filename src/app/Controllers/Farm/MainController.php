<?php

namespace App\Controllers\Farm;

use App\Controllers\FarmController;
use CodeIgniter\HTTP\ResponseInterface;

class MainController extends FarmController
{
    public function index()
    {
        return $this->renderView('farm/home/index');
    }
}
