<?php

$globalVariable = "グローバル変数です";

function checkScope($str){
  $localVariable = "ローカル変数です";
  //global $globalVariable;
  echo $str;
  
}

echo $globalVariable;
echo $localVariable;

checkScope($globalVariable);


?>
