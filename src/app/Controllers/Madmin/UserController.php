<?php

namespace App\Controllers\Madmin;

use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class UserController extends MadminController
{
    public function index()
    {
        $useModel = new Users();
        $users = $useModel->findAll();
        $this->_data['users'] = $users;
        return $this->renderView('admin/users/index');
    }

    public function create()
    {
        return $this->renderView('admin/users/edit');
    }

    public function storage()
    {
        $data = $this->request->getPost();
        
        $rules = [
            'name' => 'required',
            'email' => 'required|valid_email',
        ];
        
        if (!$this->validate($rules, $data)) {
            return redirect()->route('admin');
        }
        
        $userModel = new Users();
        $data['password'] = md5($data['password']);
        
        $userModel->save($data);

        return redirect()->route('admin.users');
    }

    public function edit($Id)
    {
        $userModel = new Users();
        $user = $userModel->find(['user_id' => $Id]);
        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'Không tìm thấy user');
        }

        $this->_data['user'] = $user;
        return $this->renderView('admin/users/edit');
    }
   
    public function update($id) {
        
        $data = $this->request->getPost();
        $rules = [
            'name'      => 'required',
            'email'		=> 'required|valid_email',
            'phone'     => 'required'
        ];
        $session = Services::session();
        if (!$this->validate($rules, $data)) {
            $session->setFlashdata('msg', 'Email hoặc mật khẩu không đúng.');
            return redirect()->route('admin.user.edit');
        }
        $userModel = new Users();

        if(isset($data['password'])){
            $data['password'] = md5($data['password']);
        }   

        $user = $userModel->find($id);
        if (!$user) {
            return redirect()->route('admin.dashboard')->with('error', 'User không tồn tại');
        }
        $userModel->update($id, $data);
        return redirect()->route('admin.users')->with('success', 'User đã được cập nhật');
    }

    public function destroy($id)
    {
        $session = Services::session();
        $auth = $session->get('admin');

        if ($auth->user->role !== 'admin') {
            return redirect()->route('admin.dashboard')->with('error', 'Bạn không có quyền thực hiện hành động này');
        }

        $userModel = new Users();

        if ($userModel->delete($id)) {
            return redirect()->to('/admin/users')->with('message', 'User deleted successfully.');
        } else {
            return redirect()->to('/admin/users')->with('error', 'Failed to delete user.');
        }
    }
}
