<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
	protected $table = "news";
	protected $allowedFields = ["title", "slug", "body"];

	public function getNews($slug = null)
	{
		if ($slug === null) {
			return $this->findAll();
		}

		return $this->where(["slug" => $slug])->first();
	}
}

?>
