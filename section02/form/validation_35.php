<?php

function validation($data){

  $error = [];

  //氏名
  if (empty($data['your_name'])){
    $error[] = '「氏名」は必須';
  }

  return $error;
}