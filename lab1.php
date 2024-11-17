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

