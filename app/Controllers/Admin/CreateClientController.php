<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Client\ClientAuthModel;

class CreateClientController extends BaseController
{
    protected $clientModel;
    protected $data;
    public function __construct()
    {
        $this->data = array();
        $this->session = session();
        $this->clientModel = new ClientAuthModel();
    }
    public function add_client()
    {
        if ($this->request->getMethod() == 'post') {


            if ($this->request->getVar('delete')) {
                $getId = $this->request->getVar('id');
                return $this->clientModel->delete($getId);
            }

            $client_id = $this->request->getVar('client_id') ? $this->request->getVar('client_id') : '';
            $title = $this->request->getVar('title') ? $this->request->getVar('title') : '';
            $full_name = $this->request->getVar('full_name') ? $this->request->getVar('full_name') : '';
            $user_name = $this->request->getVar('user_name') ? $this->request->getVar('user_name') : '';
            $password = $this->request->getVar('password') ? $this->request->getVar('password') : '';
            $email = $this->request->getVar('email') ? $this->request->getVar('email') : '';
            $address = $this->request->getVar('address') ? $this->request->getVar('address') : '';
            $pin = $this->request->getVar('pin') ? $this->request->getVar('pin') : '';
            $state = $this->request->getVar('state') ? $this->request->getVar('state') : '';
            $mobile = $this->request->getVar('mobile') ? $this->request->getVar('mobile') : '';
            $date_of_birth = $this->request->getVar('date_of_birth') ? $this->request->getVar('date_of_birth') : '';
            $agency_name = $this->request->getVar('agency_name') ? $this->request->getVar('agency_name') : '';
            $agency_phone = $this->request->getVar('agency_phone') ? $this->request->getVar('agency_phone') : '';
            $pan_card = $this->request->getVar('pan_card') ? $this->request->getVar('pan_card') : '';
            $agency_address = $this->request->getVar('agency_address') ? $this->request->getVar('agency_address') : '';
            $agency_pin = $this->request->getVar('agency_pin') ? $this->request->getVar('agency_pin') : '';
            $agency_state = $this->request->getVar('agency_state') ? $this->request->getVar('agency_state') : '';
            $client_image = $this->request->getFile('client_image') ? $this->request->getFile('client_image') : '';
            $country = $this->request->getVar('country') ? $this->request->getVar('country') : '';
            $nationality = $this->request->getVar('nationality') ? $this->request->getVar('nationality') : '';

            $newName = null;
            if ($client_image->isValid() && !$client_image->hasMoved()) {
                $newName = $client_image->getRandomName();
                $client_image->move('./public/ClientImage', $newName);
            }
            // return print_r($newName);

            $clientData = [
                'title' => $title,
                'full_name' => $full_name,
                'user_name' => $user_name,
                'password' => $password,
                'email' => $email,
                'address' => $address,
                'pin' => $pin,
                'state' => $state,
                'mobile' => $mobile,
                'date_of_birth' => $date_of_birth,
                'agency_name' => $agency_name,
                'agency_phone' => $agency_phone,
                'pan_card' => $pan_card,
                'agency_address' => $agency_address,
                'agency_pin' => $agency_pin,
                'agency_state' => $agency_state,
                'client_image' => $newName,
                'country' => $country,
                'nationality' => $nationality,
            ];

            if ($client_id > 0) {
                $clientData['id'] = $client_id;
            }
            $saveClientData = $this->clientModel->save($clientData);
            if ($saveClientData) {
                $this->session->setFlashdata('client_success', 'client add successfully');
                return redirect()->route('add_client');
            }else{
                // return print_r('teest');
                $this->session->setFlashdata('client_error', 'client add error');
                return redirect()->route('add_client');
            }
        }
        return view('dashboard/AdminDashboard/add_client');
    }

    public function client_details()
    {
        $this->data['clientData'] = $this->clientModel->findAll();
        return view('dashboard/AdminDashboard/client_details', $this->data);
    }
    public function client_d($id = null)
    {
        $this->data['clientViewData'] = $this->clientModel->where('id', $id)->find();
        // return print_r($this->data);
        return view('dashboard/AdminDashboard/client_view', $this->data);
    }
    public function client_edit($id = null)
    {
        if ($this->request->getMethod() == 'post') {


            $client_id = $id;
            $title = $this->request->getVar('title') ? $this->request->getVar('title') : '';
            $full_name = $this->request->getVar('full_name') ? $this->request->getVar('full_name') : '';
            $user_name = $this->request->getVar('user_name') ? $this->request->getVar('user_name') : '';
            $password = $this->request->getVar('password') ? $this->request->getVar('password') : '';
            $email = $this->request->getVar('email') ? $this->request->getVar('email') : '';
            $address = $this->request->getVar('address') ? $this->request->getVar('address') : '';
            $pin = $this->request->getVar('pin') ? $this->request->getVar('pin') : '';
            $state = $this->request->getVar('state') ? $this->request->getVar('state') : '';
            $mobile = $this->request->getVar('mobile') ? $this->request->getVar('mobile') : '';
            $date_of_birth = $this->request->getVar('date_of_birth') ? $this->request->getVar('date_of_birth') : '';
            $agency_name = $this->request->getVar('agency_name') ? $this->request->getVar('agency_name') : '';
            $agency_phone = $this->request->getVar('agency_phone') ? $this->request->getVar('agency_phone') : '';
            $pan_card = $this->request->getVar('pan_card') ? $this->request->getVar('pan_card') : '';
            $agency_address = $this->request->getVar('agency_address') ? $this->request->getVar('agency_address') : '';
            $agency_pin = $this->request->getVar('agency_pin') ? $this->request->getVar('agency_pin') : '';
            $agency_state = $this->request->getVar('agency_state') ? $this->request->getVar('agency_state') : '';
            $client_image = $this->request->getFile('client_image') ? $this->request->getFile('client_image') : '';
            $country = $this->request->getVar('country') ? $this->request->getVar('country') : '';
            $nationality = $this->request->getVar('nationality') ? $this->request->getVar('nationality') : '';

            $newName = null;
            if ($client_image->isValid() && !$client_image->hasMoved()) {
                $newName = $client_image->getRandomName();
                $client_image->move('./public/ClientImage', $newName);
            }
            // return print_r($_POST);

            $clientData = [
                'title' => $title,
                'full_name' => $full_name,
                'user_name' => $user_name,
                'password' => $password,
                'email' => $email,
                'address' => $address,
                'pin' => $pin,
                'state' => $state,
                'mobile' => $mobile,
                'date_of_birth' => $date_of_birth,
                'agency_name' => $agency_name,
                'agency_phone' => $agency_phone,
                'pan_card' => $pan_card,
                'agency_address' => $agency_address,
                'agency_pin' => $agency_pin,
                'agency_state' => $agency_state,
                'client_image' => $newName,
                'country' => $country,
                'nationality' => $nationality,
            ];

            if ($client_id > 0) {
                $clientData['id'] = $client_id;
            }
            $saveClientData = $this->clientModel->save($clientData);
            if ($saveClientData) {
                $this->session->setFlashdata('update_success', 'client add successfully');
                return redirect()->route('client_details');
            }
        }
        $this->data['clientEditData'] = $this->clientModel->where('id', $id)->find();
        // return print_r($this->data);
        return view('dashboard/AdminDashboard/client_edit', $this->data);
    }
}
