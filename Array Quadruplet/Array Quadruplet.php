<?php

function findArrayQuadruplet($arr, $s) {
  
  $len = count($arr);

  if($len < 3){
    return [];
  }
  
  sort($arr);
  
  for($i=0; $i<$len-3; $i++){ 
    for($j=$i+1; $j<$len-2; $j++){
      $sum = $s - ($arr[$i] + $arr[$j]);
      
      $start = $j+1;
      $end = $len-1;
      
      while($start != $end){
        if($arr[$start]+$arr[$end] < $sum){
           $start++;
        } elseif($arr[$start]+$arr[$end] > $sum) {
           $end--;
        } else {
          return [$arr[$i], $arr[$j], $arr[$start], $arr[$end]];
        }
      }
    }
  }
  return [];
}

$arr = [4,4,4,4];
$s = 16;

var_dump(findArrayQuadruplet($arr, $s));
