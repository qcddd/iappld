<?php

$code = $_GET['code'];
$msg = $_GET['msg'];

if(!isset($code)){
  echo 'error';
  exit();
}

echo '<h1>QQ</h1>';

// 发起请求，获取用户信息
echo file_get_contents("https://qq.wch666.com/api/get_user_info.php?code=$code");
