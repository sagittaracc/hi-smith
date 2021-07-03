<?php

use app\models\News;

class NewsSaver
{
	public function save($item)
	{
		$news = News::new();
		$news->title = $item['title'];
		$news->link = $item['link'];
		$news->description = $item['description'];
		$news->author = isset($item['author']) ? $item['author'] : null;
		$news->pubDate = $item['pubDate'];
		$news->save();
	}
}