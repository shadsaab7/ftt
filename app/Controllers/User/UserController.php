<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\User\PasswordReasetModel;
use App\Models\User\UserModel;

class UserController extends BaseController
{
    protected $userModel;
    protected $resetPasswordModel;
    protected $data;
    public function __construct()
    {
        $this->data = array();
        $this->session = session();
        $this->userModel = new UserModel();
        $this->resetPasswordModel = new PasswordReasetModel();
    }
    public function index()
    {
        // return print_r('test');
        if ($this->request->getMethod() == 'post') {

            if ($this->request->getVar('delete')) {

                $getId = $this->request->getVar('id');
                return $this->userModel->delete($getId);
            }

            $userId = $this->request->getVar('userId') ? $userId = $this->request->getVar('userId') : '';
            $user_name = $this->request->getVar('user_name');
            $name = $this->request->getVar('name');
            $sure_name = $this->request->getVar('sure_name');
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $repeate_password = $this->request->getVar('repeate_password');

            //   return print_r($_POST);
            $userData = [
                'user_name' => $user_name,
                'name' => $name,
                'sure_name' => $sure_name,
                'email' => $email,
                'password' => $password, // password_hash($password, PASSWORD_DEFAULT),
            ];

            if ($userData) {
                $userData['id'] = $userId;
            }
            // return print_r($_POST);
            if ($password == $repeate_password) {
                $saveUsers = $this->userModel->save($userData);
            } else {
                $this->session->setFlashdata("password_not_match", "Password should be same");
                return redirect()->route('home');
            }


            if ($saveUsers) {
                $this->session->setFlashdata("success_register", "Data Saved");
                return redirect()->route('home');
            } else {
                $response['message'] = 'User not found';
            }
        }
        return view('front/index');
    }

    public function forget_password()
    {
        if ($this->request->getMethod() == 'post') {
            $email = $this->request->getVar('email') ? $this->request->getVar('email') : '';

            $getUserDetails = $this->userModel->where('email', $email)->first();
            $email_to = $getUserDetails['email'];
            $id = $getUserDetails['id'];
            $type = 'user';
            $token = rand();

            $resetData = [
                'email' => $email,
                'user_id' => $id,
                'type' => $type,
                'code' => $token,
            ];

            $link = '<a href="http://localhost:8080/user/accept-password/?email=' . $email_to . '&token_num=' . $token . '">for change password</a>';
            // return print_r($resetData);
            if ($getUserDetails) {
                $this->resetPasswordModel->save($resetData);
                $email = \Config\Services::email();

                $email->setFrom('fttonline@gmail.com', 'Ftt-Online Admin');
                $email->setTo($email_to);

                $email->setSubject('For change your password click on the link' . $link);
                $email->setMessage('Always be careful about your password');

                $email->send();

                $this->session->setFlashdata("forget_password", "check your email");
                return redirect()->route('home');
            } else {
                $this->session->setFlashdata("email_not_exist", "email not exist");
                return redirect()->route('home');
            }
        }
    }
    public function accept_password()
    {

        $r_email = $this->request->getVar('email');
        $token_num = $this->request->getVar('token_num');
        //    return print_r($id);
        //    return print_r($token_num);

        $this->data['verify'] = $this->resetPasswordModel->where(['email' => $r_email, 'code' => $token_num, 'status' => 0])->first();

        if ($this->request->getMethod() == 'post') {

            $email = $this->request->getVar('email') ? $this->request->getVar('email') : '';
            $token_num = $this->request->getVar('token_num') ? $this->request->getVar('token_num') : '';
            $password = $this->request->getVar('password') ? $this->request->getVar('password') : '';
            $repeate_password = $this->request->getVar('repeate_password') ? $this->request->getVar('repeate_password') : '';

            if ($password == $repeate_password) {
                $updateUserPassword = $this->userModel->set('password', $password)->where('email', $email)->update();
                if ($updateUserPassword) {

                    $this->session->setFlashdata("password_changed", "passworrd changed");
                    return redirect()->route('home');
                }
            } else {
                $this->session->setFlashdata("password_not_match", "password not match");
                return redirect()->route('accept_password');
            }


            // return print_r($this->request->getVar());
        }
        return view('front/change_password', $this->data);
    }

    public function user_index()
    {
        if ($this->request->getMethod() == 'post') {

            $userId = $this->request->getVar('userId') ? $userId = $this->request->getVar('userId') : '';
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            // $userLogin = $this->userModel->where(['email' => $email, 'password' => $password])->findAll();
            $userLogin = $this->userModel->where(['email'=> $email,'password'=> $password])->first();
            // return print_r($userLogin);

            if ($userLogin) {

                $this->data['userLoggedIn'] = true;
                $this->data['user'] = $userLogin;
                // return print_r($this->data);
                session()->set($this->data);
                return redirect()->route('user_dashboard');
            } else {
                // return print_r('test');
                $this->session->setFlashdata("user_not_exist", "User not exist");
                return redirect()->route('home');
            }
        }
    }
    public function user_dashboard()
    {
        return view('front/user_dashboard');
    }
    public function user_logout()
    {
        session()->destroy();
        return redirect()->route('home');
    }
    public function user_details()
    {
        $this->data['userDetails'] = $this->userModel->findAll();
        return view('dashboard/AdminDashboard/user_details', $this->data);
    }
}
