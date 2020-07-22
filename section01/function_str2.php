<?php

//文字列の長さ

// マルチバイト 
// 日本語 SJIS, UTF-8 3〜6バイト
$text = 'あいうえお';

//echo strlen($text);

echo mb_strlen($text);

//文字列の置換

$str = '文字列を置換します';

echo str_replace('置換','ちかん',$str);

//指定文字列で分割

$str_2 = '指定文字で、分割します';



?>
