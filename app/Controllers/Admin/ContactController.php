<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ContactModel;

class ContactController extends BaseController
{
    protected $contactModel;
    protected $data;
    public function __construct()
    {
        $this->data = array();
        $this->session = session();
        helper(['form', 'url']);
        $this->contactModel = new ContactModel();
    }
    public function enquiry()
    {
        // return print_r($_POST);
        if ($this->request->getMethod() == 'post') {

            if ($this->request->getVar('delete')) {

                $getId = $this->request->getVar('id');
                return $this->contactModel->delete($getId);
            }

            $enquiry_for = $this->request->getVar('enquiry_for');
            $name = $this->request->getVar('name');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            $message = $this->request->getVar('message');
            $passport_copy = $this->request->getFile('passport_copy');
            $country = $this->request->getVar('country');
            $date = $this->request->getVar('date');


            if ($passport_copy) {
                $newName = $passport_copy->getRandomName(); //This is if you want to change the file name to encrypted name
                $passport_copy->move('./public/EnquiryImage', $newName);

                $enquiryData['passport_copy'] = $newName;
            }

            //   return print_r($_POST);
            $enquiryData = [
                'enquiry_for' => $enquiry_for,
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                'country' => $country,
                'date' => $date,
            ];
            // return print_r($_POST);
            $saveEnquries = $this->contactModel->insert($enquiryData);

            if ($saveEnquries) {
                $this->session->setFlashdata("message_contect", "Data Saved");
                return redirect()->route('contact_us');
            } else {
                $response['message'] = 'User not found';
            }
        }
    }
    public function contact_us()
    {
        $this->data['contactData'] = $this->contactModel->select('id,name,email,phone,message,created_at')->where('email !=', '')->orderBy('id', 'DESC')->findAll();
        return view('dashboard/AdminDashboard/contact_us', $this->data);
    }
    public function enquiry_for()
    {
        $this->data['enquiryData'] = $this->contactModel->where('enquiry_for !=', '')->orderBy('id', 'DESC')->findAll();
        return view('dashboard/AdminDashboard/enquiry_for', $this->data);
    }
}
