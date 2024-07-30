<?php

namespace App\Controllers\Madmin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use stdClass;

class MadminController extends BaseController
{
    protected $_data = [];
    protected $auth = [];

    public function __construct() {
        $this->_data = [];
    }

    public function renderView($viewContent, $data = [])
	{
		$_view = Services::renderer();
        $session = Services::session();
        $this->auth = $session->get('admin');
        $this->_data['payLoad'] = $data;
        $this->_data['auth'] = $this->auth;

        $this->_setRenderSection($_view, 'leftsidebar', 'admin/inc/leftsidebar', $this->_data);
        $this->_setRenderSection($_view, 'navbar', 'admin/inc/navbar', $this->_data);

        $uri = current_url(true);
        if($uri->getSegment(2)){
            $bread = $this->breadcumbData();
            $this->_setRenderSection($_view, 'breadcumb', 'admin/inc/breadcumb', ['bread'=>$bread]);
        }

        $this->_setRenderSection($_view, 'content', $viewContent, $this->_data);
        $this->_setRenderSection($_view, 'footer', 'admin/inc/footer', $this->_data);

		return view('admin/main_temp');
	}

    protected function breadcumbData(){
        $uri = current_url(true);
        $mod = $uri->getSegment(2);
        $act = $uri->getSegment(3);
        $itemId = $uri->getSegment(3);
        $bread = new stdClass();
        $bread->mod = $mod;
        $bread->title = !$act ? "Danh sách" : ($itemId ? "Cập nhật" : "Thêm mới");
        // $text = "";
        // switch ($mod) {
        //     case "users":
        //         $text = "Nhân viên";
        //         break;
        // }
        $bread->title = lang("Admin.$mod"."_$act");
        $bread->cums = [
            (object)[
                'title' =>  lang('Admin.dashboard'),
                'url'   =>  url_to('admin')
            ],
            (object)[
                'title' =>  lang("Admin.".$mod."_management"),
                'url'   =>  null
            ]
        ];
        return $bread;
    }
}
