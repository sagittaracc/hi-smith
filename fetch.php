<?php

use suql\db\Container; 

require 'vendor/autoload.php';

Container::create(require __DIR__ . '/app/config/db.php');

$rssReader = new RSSReader(new NewsSaver);
$rssReader->open('news.rss');
$rssReader->processItems();
$rssReader->close();