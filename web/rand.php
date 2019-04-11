<?php

$str = 'abcdefghijklmnopqrstuvwxyz123456789';
//取随机10位字符串
$strs="1234567890qwertyuiopasdfghjklzxcvbnm";
for ($i=0; $i < 3000; $i++) {
  $name=substr(str_shuffle($strs),mt_rand(0,strlen($strs)-3),3);
  echo $name . "<br/>";
}
