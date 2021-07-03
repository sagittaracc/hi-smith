<?php

use app\models\News;
use suql\db\Container;

require 'vendor/autoload.php';

// Connect to the database
Container::create(require __DIR__ . '/app/config/db.php');

// Fetch data from the database
$data = News::all()->fetchAll();

foreach ($data as $row) {
	echo "Title: {$row->title}\n";
	echo "Author: {$row->author}\n";
	echo "Date: {$row->pubDate}\n";
	echo "Description: {$row->description}\n";
	echo "Link: {$row->link}\n\n";
}