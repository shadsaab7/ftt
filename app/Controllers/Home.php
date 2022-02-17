<?php

namespace App\Controllers;

use App\Models\Admin\TourPackagesModel;
use App\Models\Vendor\VendorModel;

class Home extends BaseController
{
    protected $vendorModel;
    protected $tourPackageModel;
    protected $data;
    public function __construct()
    {
        $this->vendorModel = new VendorModel();
        $this->vendorModel = new TourPackagesModel();
        $this->data = array();
    }
    public function index()
    {

        $this->data['vendorData'] = $this->vendorModel->findAll();
        return view('front/index', $this->data);
    }

    public function uae_visa()
    {
        return view('front/uae-visa');
    }
    public function hotels()
    {
        return view('front/hotels');
    }
    public function flights()
    {
        return view('front/flights');
    }
    public function tour_packeges()
    {
        return view('front/tour_packeges');
    }
    public function online_payment()
    {
        return view('front/online_payment');
    }
    public function about_us()
    {
        return view('front/about_us');
    }
    public function contact_us()
    {
        return view('front/contact_us');
    }
    public function privacy_policy()
    {
        return view('front/privacy_policy');
    }
    public function terms_conditions()
    {
        return view('front/terms_conditions');
    }
    public function disclaimer_policy()
    {
        return view('front/disclaimer_policy');
    }
    public function print_e_ticket()
    {
        return view('front/print_e_ticket');
    }
    public function tour_packages_overview()
    {

        $this->data['tourPackageData'] = $this->tourPackageModel->findAll();
        return view('front/tour_packages_overview', $this->data);
    }
}
