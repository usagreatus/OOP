<?php
/**
 * Created by PhpStorm.
 * User: Anatolii
 * Date: 12/8/2016
 * Time: 10:25 PM
 */
require __DIR__ . '/models/news.php';

if (!empty($_POST)) {
    $data = [];
    if(!empty ($_POST['title'])){
        $data['title'] = $_POST['title'];
    }
    if(!empty ($_POST['date'])){
        $data['date'] = $_POST['date'];
    }
    if(!empty ($_FILES)){
        $res = File_upload('news');
        if (false !== $res) {
            $data['news'] = $res;
        }
    }
    if (isset($data['date']) && isset($data['title']) && isset($data['news'])) {
        News_insert($data);
        header('Location: /index.php');
    }

    include __DIR__ . '/views/add.php';
}
