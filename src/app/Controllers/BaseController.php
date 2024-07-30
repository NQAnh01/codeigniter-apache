<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    protected $_view;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function _setRenderSection($viewRenderer, $sectionName , $viewName, $data = []) {
        $viewRenderer->section($sectionName);
        echo view($viewName, $data);
        $viewRenderer->endSection($sectionName);
    }

    /**
     * Success Response
     *
     * @param $data
     * @param string $message
     * @param array $otherInfo
     * @param int $code
     * @param array $headers
     * @param int $options
     * @return JsonResponse
     */
    public function success($data=null, $message = "", $otherInfo = [], $headers = [], $code = 200,  $options = 0){
        $response = [
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ];

        return $this->response->setStatusCode($code)->setJSON(array_merge($response, $otherInfo), $code, $headers, $options);
    }

    /**
     *  Error Response
     * @param string $message
     * @param array $otherInfo
     * @param int $code
     * @return JsonResponse
     */
    public function error($message = '', $otherInfo = [], $code = 400) {
        $response = [
            'status' => 'error',
            'message' => $message,
            'data' => null
        ];

        return $this->response->setStatusCode($code)->setJSON(array_merge($response, ['message' => $otherInfo]), $code);
    }
}
