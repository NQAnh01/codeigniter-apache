<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Database;

class CheckDB extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        if ($db->connect())
        {
            echo "Kết nối thành công!";
        }
        else
        {
            echo "Kết nối thất bại!";
        }
    }
}
