<?php

function getNumberOfIslands($binaryMatrix) {
  $islands = 0;
  $row = count($binaryMatrix);
  $column = count($binaryMatrix[0]);
  
  for($i=0; $i<$row; $i++){
    for($j=0; $j<$column; $j++){
      
        if($binaryMatrix[$i][$j] === 1){
           markIsland($binaryMatrix, $row, $column, $i, $j);
           $islands++;
        } 
      
       
    }
  }
  
 return $islands;
}


function markIsland(&$binaryMatrix, $rows, $cols, $i, $j)
{
  $queue = new splqueue();
  $queue->enqueue([$i, $j]);
  
  while(!$queue->isEmpty()){
    
    $item = $queue->dequeue();
   
        $x = $item[0];
        $y = $item[1];
    
        if ($binaryMatrix[$x][$y] == 1){
            $binaryMatrix[$x][$y] = -1;
            pushIfValid($queue, $rows, $cols, $x-1, $y);
            pushIfValid($queue, $rows, $cols, $x, $y-1);
            pushIfValid($queue, $rows, $cols, $x+1, $y);
            pushIfValid($queue, $rows, $cols, $x, $y+1);  
        }       
   }    
}

function pushIfValid($queue, $rows, $cols, $x, $y)
{
  if ($x >= 0 && $x < $rows && $y >= 0 && $y < $cols){
     $queue->enqueue([$x,$y]);
  }
      
}
    

 $binaryMatrix =       [ [0,    1,    0,    1,    0],
                         [0,    0,    1,    1,    1],
                         [1,    0,    0,    1,    0],
                         [0,    1,    1,    0,    0],
                         [1,    0,    1,    0,    1] ];
 

$res = getNumberOfIslands($binaryMatrix);

echo $res;
