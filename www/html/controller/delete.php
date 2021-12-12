<?php

require_once '../conf/const.php';
require_once '../model/db.php';
require_once '../model/functions.php';

$db = get_db_connect();
$id = get_post('id');

$memo_data = select_contents($db);

// print "hello";
// print $id;

if(delete_memo($db, $id)){
    set_message('削除しといたで');
}else{
    set_error('削除できひんかったわ');
}



include_once '../view/index_view.php';