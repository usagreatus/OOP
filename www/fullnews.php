<?php
/**
 * Created by PhpStorm.
 * User: Anatolii
 * Date: 12/8/2016
 * Time: 10:18 PM
 */
//render single news article

require_once __DIR__ . '/models/news.php';
if(!isset($_GET['id'])){
    echo "Article doesn't exist.";
} else {
    $news_id = $_GET['id'];
    $full_news = News_getOnlyChosen($news_id);
}

include __DIR__ . '/views/fullnews.php';