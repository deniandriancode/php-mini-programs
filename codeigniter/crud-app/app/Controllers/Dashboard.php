<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = model(DashboardModel::class);
        $data = ["title" => "Home"];
        $allNews = ["allNews" => $model->getNews()];

        return view("templates/header", $data)
             . view("dashboard/home", $allNews)
             . view("templates/footer");
    }

    public function view($page = null)
    {
        if ($page === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot find requested page");
        }

        $data = ["title" => "Some Title"];
        return view("templates/header", $data)
             . view("dashboard/" . $page)
             . view("templates/footer");
    }

    public function news($page = null)
    {
        if ($page === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Cannot find requested page");
        }

        $model = model(DashboardModel::class);
        $newsData = $model->getNews($page);
        $data = [
            "body" => $newsData["body"]
        ];

        return view("templates/header", ["title" => $newsData["title"]])
             . view("dashboard/news", $data)
             . view("templates/footer");
    }
}

?>
