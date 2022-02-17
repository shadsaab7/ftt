<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin\AuthModel;

class AuthController extends BaseController
{
    protected $adminModel;
    protected $data;
    public function __construct()
    {
        $this->adminModel = new AuthModel();
        $this->data = array();
        $this->session = session();
    }
    public function index()
    {

        if ($this->request->getMethod() == 'post') {
            $adminEmail = $this->request->getVar('email');
            $adminPassword = $this->request->getVar('password');

            $getUser = $this->adminModel->where('email', $adminEmail)->first();

            $response = ['success' => false, 'message' => ''];
            if ($getUser) {

                if ($getUser['password'] == $adminPassword && $getUser['type'] == 'admin') {

                    unset($getUser['password']);
                    // unset($getUser['token']);
                    // return print_r($getUser);

                    $data['adminLoggedIn'] = true;
                    $data['admin'] = $getUser;
                    session()->set($data);
                    return redirect()->route('admin_index');
                }else{
                    $response['message'] = 'User not found';
                }
            } else {
                $response['message'] = 'User not found';
            }
            // return print_r($response);
        }
        return view('auth/AdminAuth/index');
    }
    public function admin_profile()
    {
        $adminId = session()->get('admin.id');
        $this->data['adminProfile'] = $this->adminModel->where('id', $adminId)->find();
        return view('dashboard/AdminDashboard/admin_profile', $this->data);
    }
    public function update_profile()
    {
        $admin_id = $this->request->getVar('admin_id') ? $this->request->getVar('admin_id') : '';
        $first_name = $this->request->getVar('first_name') ? $this->request->getVar('first_name') : '';
        $last_name = $this->request->getVar('last_name') ? $this->request->getVar('last_name') : '';
        $phone_number = $this->request->getVar('phone_number') ? $this->request->getVar('phone_number') : '';
        $email = $this->request->getVar('email') ? $this->request->getVar('email') : '';
        $date_of_birth = $this->request->getVar('date_of_birth') ? $this->request->getVar('date_of_birth') : '';
        $address = $this->request->getVar('address') ? $this->request->getVar('address') : '';
        $state = $this->request->getVar('state') ? $this->request->getVar('state') : '';
        $country = $this->request->getVar('country') ? $this->request->getVar('country') : '';
        // return print_r($_POST);

        $updateData = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number' => $phone_number,
            'email' => $email,
            'date_of_birth' => $date_of_birth,
            'address' => $address,
            'state' => $state,
            'country' => $country,
        ];
        if ($admin_id > 0) {
            $updateData['id'] = $admin_id;
        }
        $isUpdate = $this->adminModel->save($updateData);
        if ($isUpdate) {
            $this->session->setFlashdata('updated', 'updated successfully');
            return redirect()->route('admin_profile');
        }
        return view('dashboard/AdminDashboard/admin_profile');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('login');
    }
}
