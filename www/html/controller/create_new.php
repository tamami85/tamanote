<?php

require_once '../conf/const.php';
require_once '../model/db.php';
require_once '../model/functions.php';

$db = get_db_connect();

$title = get_post('title');
$contents = get_post('contents');
$date = date("Y-m-d H:i:s");


is_valid_title($title);

if(has_error() === false){
    if(add_contents($db, $title, $contents, $date)){
        set_message('メモ保存できたで');
    }else{
        set_error('メモ保存に失敗したやん');
    }
}else{
    set_error('タイトル入れてくれな保存できひんわ');
}



include_once '../view/create_new_view.php';