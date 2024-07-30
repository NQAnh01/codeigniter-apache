<?php

namespace App\Controllers\Madmin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use App\Models\Users;
use stdClass;

class AuthController extends BaseController
{
    public function login()
    {
        $session = Services::session();
        $isLoggedin = $session->admin->isLoggedIn ?? false;
        if ($isLoggedin) {
            return redirect()->to('admin');
        }
        return view('admin/auth/login');
    }

    public function logout()
    {
        $session = Services::session();
        $session->remove('admin');
        return redirect()->to('admin/login');
    }

    public function attemptLogin() {
        $data = $this->request->getPost();
        $rules = [
			'email'		=> 'required|valid_email',
			'password' 	=> 'required|min_length[6]',
		];
        $session = Services::session();
		if (!$this->validate($rules, $data)) {
            $session->setFlashdata('msg', 'Email hoặc mật khẩu không đúng.');
            return redirect()->route('admin.login');
		}
        $userModel = new Users();
        $user = $userModel->where('email', $data['email'])->first();
        if (!$user || $user->password != md5($data['password'])) {
            $session->setFlashdata('msg', 'Email hoặc mật khẩu không đúng.');
            return redirect()->route('admin.login');
        }
        $auth =  new stdClass();
        $auth->isLoggedIn = true;
        $auth->id = $user->user_id;
        $auth->user = (object)[
            'user_id'   =>  $user->user_id,
            'name'      =>  $user->name,
            'email'     =>  $user->email,
            'role'      =>  $user->role,
            'avatar'    =>  $user->avatar
        ];
        $session->set('admin', $auth);
        return redirect()->route('admin.dashboard');
    }
}
