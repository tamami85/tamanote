<?php

//SQLインジェクション対策
function h($str){
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}


//postされたものの存在確認
function get_post($key){
    $str = '';
    if(isset($_POST[$key]) === true){
        $str = trim($_POST[$key]);
    }
    return $str;
}


//エラーメッセージをセッションに入れる
function set_error($error){
    $_SESSION['__errors'][] = $error;
}

//成功メッセージをセッションに入れる
function set_message($message){
    $_SESSION['__messages'][] = $message;
}

//さていよいよセッション箱に入れましょか関数
function set_session($name, $value){
    $_SESSION[$name] = $value;//セッション箱に入れる何かしらの名前取得したら、$valueっていう何かしらのあだ名つける
}

//セッションで何かしら取得する関数
function get_session($name){
    if(isset($_SESSION[$name]) === true){//nameはセッション箱に存在してるんか？===してる！
      return $_SESSION[$name];//してる！なら$_SESSION[$name]使っていいで
    };
    return '';//してへんかったら空っぽ配列返す
}
  
//エラーたちをもらってもうたときの関数
function get_errors(){
    $errors = get_session('__errors');//$errorsは「セッションがエラーかましてきたらどうすんの？関数」でもらったエラーたち
    if($errors === ''){//でもよう見たらエラー無いやん！ってなったら
      return array();//空にしてなかったことにする
    }
    set_session('__errors',  array());//「さていよいよセッション箱に入れましょか関数」再び
    return $errors;//__errorsがおったら、やっぱりエラーあるやんってことで$errorsにあげちゃう
}

//メッセージたちを手に入れたときの関数
function get_messages(){
    $messages = get_session('__messages');//セッション箱にいれたメッセージたちには$messagesっていうあだ名つける
    if($messages === ''){//でもそれが空っぽやったら
      return array();//なかったことにする
    }
    set_session('__messages',  array());//「セッションにメッセージ入れたいときの関数」再び
    return $messages;//$messagesっていうあだ名つける
}

//エラーあるぞ！関数
function has_error(){
    return isset($_SESSION['__errors']) && count($_SESSION['__errors']) !== 0;
    //__errorsは存在してて、かつ、__errorsが1個でも持ってるやん！な状態
}

//タイトル空欄のバリデ
function is_valid_title($title){
    if($title === ''){
        set_error('タイトルぐらい入力しようや');      
    }
}


