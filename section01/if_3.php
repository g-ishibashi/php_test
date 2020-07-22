<?php

$height = 91;

// if ($height >= 91){
//   echo '身長は' . $height . 'cmです';
// }

// if ($height <= 90){ 
//   echo '身長は' . $height . 'cmになります。';
// }

if ($height !== 90){ //型が同じかどうか
  echo '身長は90cmではありません。';
}

//データが入っているかどうか
// isset empty is_null

$test = '1';//文字

if(!empty($test)){
  echo '変数は空です';
}

// AND と OR

$signal_1 = 'red';
$signal_2 = 'yellow';

if($signal_1 === 'red' || $signal_2 === 'blue'){
  echo '赤です';
}

//三項演算子
//if else
//条件 ? 真 : 偽

$math = 80;

$comment = $math > 80 ? 'good' : 'not good';

echo $comment;


?>