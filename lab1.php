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


function removeEveryOther($array) {
    $result = [];

    for ($i = 0; $i < count($array); $i += 2) {
        $result[] = $array[$i];
    }

    return $result;
}


//7kyu

function multiples(int $m, float $n): array {
    $result = [];

    for ($i = 1; $i <= $m; $i++) {
        $result[] = $n * $i;
    }

    return $result;
}

//


function disemvowel(string $s): string  {
    return preg_replace('/[aeiouAEIOU]/', '', $s);
}


//


function square_digits(int $num): int {
    $digits = str_split((string)$num);
    
    $squaredDigits = array_map(function($digit) {
          return $digit ** 2;
    }, $digits);

    $result = (int) implode('', $squaredDigits);
    
    return $result;
}

//8 kyu 

function expanded_form(int $n): string {
    $digits = str_split((string)$n);
        $length = count($digits);
        $result = [];

        foreach ($digits as $index => $digit) {
            if ($digit != '0') {
               $result[] = $digit * (10 ** ($length - $index - 1));
            }
        }

        return implode(' + ', $result);
    }


    //6kyu


    function digital_root($number): int
{
    if ($number < 10) {
        return $number;
    }

    $sum = array_sum(str_split((string)$number));

    return digital_root($sum);
}