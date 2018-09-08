<?php

function getShortestUniqueSubstring($arr, $str) {
  
  if(empty($str)){
    return "";
  }
  
  $strLen = strlen($str);
  $arrLen = count($arr);
 
  for($i=0; $i<$strLen; $i++)
  { 
    for($j=0; $j<$strLen; $j++) {
      
        $substrArr[$i] = substr($str, $j, $arrLen+$i);
        $sub_arr = str_split($substrArr[$i]);
      
        $common = implode(array_unique(array_intersect($arr, $sub_arr)));
      
        if($common == implode($arr)){ 
          return $substrArr[$i];
        }
     }
  }
  
  return "";
  
}

$arr = ['x','y','z'];

$str = "xyyzyzyx";

$res = getShortestUniqueSubstring($arr, $str);

var_dump($res);
