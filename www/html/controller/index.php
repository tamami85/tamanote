<?php

require_once '../conf/const.php';
require_once '../model/db.php';
require_once '../model/functions.php';

$db = get_db_connect();
$id = get_post('id');

$memo_data = select_contents($db);






include_once '../view/index_view.php';