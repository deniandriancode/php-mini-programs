<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = "news";

    public function getNews($slug = false)
    {
        if (!$slug) {
            return $this->findAll();
        }

        return $this->where(["slug" => $slug])->first();
    }
}

?>
