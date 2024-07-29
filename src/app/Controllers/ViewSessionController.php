<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ViewSessionController extends Controller
{
    public function viewSession()
    {
        // Lấy toàn bộ dữ liệu session
        $sessionData = session()->get();

        // Hiển thị dữ liệu session (ví dụ bằng cách truyền dữ liệu này đến view)
        return view('view_session', ['sessionData' => $sessionData]);
    }
}
