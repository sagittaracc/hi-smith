<?php

namespace app\models;

use app\records\ActiveRecord;

class News extends ActiveRecord
{
	public $title;
	public $link;
	public $description;
	public $author;
	public $pubDate;

    public function table()
    {
        return 'news';
    }
	
    public function create()
    {
		return [
		    'title' => 'string',
			'link' => 'string',
			'description' => 'string',
			'pubDate' => 'string',
			'author' => 'string',
		];
    }

    public function fields()
    {
        return [];
    }
}