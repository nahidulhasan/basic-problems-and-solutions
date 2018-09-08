<?php

function spiralCopy($inputMatrix) {
  
  $m = 0;
    $n = 0;
    $row = count($inputMatrix)-1;
    $col = count($inputMatrix[0])-1;
    
    $newArr=[];

    while ($m <= $row && $n <= $col) {
        for ($i = $n; $i <= $col; ++$i) {
            array_push($newArr, $inputMatrix[$m][$i]);
        }
        $m++;
        for ($i=$m; $i <= $row ; $i++) { 
            array_push($newArr, $inputMatrix[$i][$col]);
        }
        $col--;
        
         if($row == 0 && $col == 0 && $n == 0) 
           return $newArr;
      
        for ($i=$col; $i >= $n ; $i--) { 
            array_push($newArr, $inputMatrix[$row][$i]);
        }
        $row--;
        for ($i=$row; $i >= $m ; $i--) { 
            array_push($newArr, $inputMatrix[$i][$n]);
        }
        $n++;
    }
  return $newArr;
}


$inputMatrix = [ [1,    2,   3,  4,    5],
                 [6,    7,   8,  9,   10],
                 [11,  12,  13,  14,  15],
                 [16,  17,  18,  19,  20] ];

 print_r(spiralCopy($inputMatrix));