<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\NewsAndAnnouncementModel;


class DashboardController extends BaseController
{
    protected $newsAnnouncement;
    protected $data;
    public function __construct()
    {
        $this->data = array();
        $this->newsAnnouncement = new NewsAndAnnouncementModel();
    }
    public function index()
    {
        $this->data['news'] = $this->newsAnnouncement->findAll();
        return view('dashboard/AdminDashboard/index', $this->data);
    }
}
