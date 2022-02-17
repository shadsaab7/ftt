<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\NewsAndAnnouncementModel;

class NewsAndAnnouncementController extends BaseController
{
    protected $newsAnnouncement;
    protected $data;
    protected $session;

    public function __construct()
    {
        $this->data = array();
        $this->session = session();
        $this->newsAnnouncement = new NewsAndAnnouncementModel();
    }
    public function index()
    {
        if ($this->request->getMethod() == 'post') {

            if ($this->request->getVar('delete')) {

                $getId = $this->request->getVar('id');
                return $this->newsAnnouncement->delete($getId);
            }

            $title = $this->request->getVar('title');
            $keyword = $this->request->getVar('keyword');

            $newsData = [
                'title' => $title,
                'keyword' => $keyword,
            ];

            $saveNews = $this->newsAnnouncement->save($newsData);

            if ($saveNews) {
                $this->session->setFlashdata("success", "Data Saved");
                return redirect()->route('add_news');
            } else {
                $response['message'] = 'User not found';
            }
        }
        $this->data['newsAndAnnouncement'] = $this->newsAnnouncement->findAll();

        return view('dashboard/AdminDashboard/add_news', $this->data);
    }

    public function news_list()
    {
        $this->data['newsAndAnnouncement'] = $this->newsAnnouncement->findAll();
        return view('dashboard/adminDashboard/news_list', $this->data);
    }
}
