<?php>
//8kyu
function enough($cap, $on, $wait) {
    $available = $cap - $on;
    if ($wait <= $available) {
        return 0;
    }
    return $wait - $available;
}

//


function square_sum(array $numbers) : int {
    $sum = 0;
    foreach ($numbers as $num) {
          $sum += $num ** 2; 
    }
    return $sum;
}

//