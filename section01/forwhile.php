<?php

// for 繰り返す数が決まっていたら
// while 繰り返す数が決まっていなかったら

// continue, break
for($i = 0; $i < 10; $i++ ){

  if($i === 5){
  //break;
  //continue;
  }
  echo $i;
}

echo '<br>';

$j = 0; 
while($j < 5){
  echo $j;
  $j++;
}

do{echo $j;}
while($j < 5);

?>