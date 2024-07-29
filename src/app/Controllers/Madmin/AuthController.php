<?php

namespace App\Controllers\Madmin;

use App\Controllers\BaseController;
use CodeIgniter\Config\Services;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('commons/admin/auth/login');
    }
    public function loginSubmit()
    {
        $session = session();
        $authModel = new AuthModel();

        // Get the email and password from the form
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Validate user credentials
        $user = $authModel->where('email', $email)->first();

        if ($user) {
            $hashedPassword = md5($password);
            // Verify password
            if ($hashedPassword === $user['password']) {
                // Set session data
                $sessionData = [
                    'isLoggedIn' => true,
                    'id' => $user['user_id'],
                    'user' => [
                        'user_id' => $user['user_id'],
                        'name' => $user['name'],
                        'avatar' => $user['avatar'], // Giả sử bảng users có cột avatar
                        'email' => $user['email'],
                    ],
                ];
                $session->set($sessionData);

                // Redirect to dashboard
                return redirect()->to('admin/dashboard');
            } else {
                $session->setFlashdata('error', 'Invalid password');
                return redirect()->to('admin/login');
            }
        } else {
            $session->setFlashdata('error', 'Email not found');
            return redirect()->to('admin/login');
        }
    }
     public function logout()
    {
        $session = session();
        $session->destroy(); // Xóa toàn bộ dữ liệu session
        
        return redirect()->to('/login'); // Chuyển hướng đến trang đăng nhập hoặc trang chủ
    }
}
