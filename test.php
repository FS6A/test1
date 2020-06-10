<?php

ob_start();

$API_KEY = '1244053472:AAEuSWQgimTkv1ijCnJqAHUjrBNVLtnIl3A';
define('API_KEY' ,$API_KEY);
function bot($method,$datas=[]){
  $url = "https://api.telegram.org/bot".API_KEY."/".$method;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRNSFER, TRUE);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
  $res = curl_exec($ch);
  if(curl_error($ch)){
  var_dump(curl_error($ch));
  }else {
$update = json_decode(fill_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
if($text == '/start'){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'Hi'
  ]);
}


?>