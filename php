<?php
function task17($n) { 
  $sum = 0;
  for($i = 0; $i <= $n; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        $sum -= 1;
        echo $sum . '<br>';
    }
    else if($i%3 == 0) {
            echo $i . '<br>';
    }
    else if($i%5 == 0) {
        $sum += $i;
        echo $sum . '<br>';
    }
    }
        return $sum;
    }
