<?php

function view($template,$data=[]){
  if(is_array($data)){
      extract($data,EXTR_OVERWRITE);
  }else{
    die("No data in array");
  }
  return require "src/Views/{$template}.view.php";
}
function object_to_array($data){
  if(is_object($data)) {
		$data = get_object_vars($data);
	}
	if(is_array($data)) {
		return array_map(__FUNCTION__, $data);
	}
	else {
		return $data;
	}
}