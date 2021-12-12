<?php
require_once '../conf/const.php';
require_once '../model/db.php';
require_once '../model/functions.php';

$db = get_db_connect();
$id = get_post('id');
$title = get_post('title');
$contents = get_post('contents');
$date = date("Y-m-d H:i:s");

$memo_data = select_contents($db);

print $id;
print $title;
print $contents;

is_valid_title($title);

if(has_error() === false){
    if(update_memo($db, $title, $contents, $date, $id)){
        set_message('更新しといたで');
    }else{
        set_error('更新できひんかったわ');
    }
}else{
    set_error('タイトル入れてくれな更新できひんわ');
}

for ($i = 0 ; $i < 20 ; $i++){
    print($i*$i . '<br>');
}




include_once '../view/index_view.php';