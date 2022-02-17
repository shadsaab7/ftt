<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;

class ClientDashboardController extends BaseController
{
    public function index()
    {
       return view('dashboard/ClientDashboard/index');
    }
}
