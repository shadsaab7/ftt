<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\Client\ClientAuthModel;
use App\Models\Client\ClientModel;

class ClientAuthController extends BaseController
{
    protected $clientAuthModel;
    protected $data;
    public function __construct()
    {
        $this->clientAuthModel = new ClientAuthModel();
        $this->data = array();
    }
    public function index()
    {

        if ($this->request->getMethod() == 'post') {
            $clientEmail = $this->request->getVar('email');
            $clientPassword = $this->request->getVar('password');

            $getUser = $this->clientAuthModel->where('email', $clientEmail)->first();

            $response = ['success' => false, 'message' => ''];
            if ($getUser) {

                if ($getUser['password'] == $clientPassword && $getUser['type'] == 'client') {

                    unset($getUser['password']);
                    // unset($getUser['token']);
                    // return print_r($getUser);

                    $data['clientLoggedIn'] = true;
                    $data['client'] = $getUser;
                    session()->set($data);
                    return redirect()->route('client_index');
                }
            } else {
                $response['message'] = 'User not found';
            }
            // return print_r($response);
        }
        return view('auth/ClientAuth/index');
    }

    public function logout(){
        session()->destroy();
        return redirect()->route('client_login');
    }
}
