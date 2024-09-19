<?php
function isPrime(int $n): bool {
    for($i=2; $i<$n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true; 
}

//echo isPrime(41) ? "Es primo" : "No es primo";

function primeList(int $start, $amount = 10) : array {
    $list = [];
    
    while(count($list) < $amount) {
        if (isPrime($start)) {
            $list[] = $start;
        }
        $start++;
    }

    return $list;
}

echo "<ol>";
foreach(primeList(200,100) as $prime) {
    echo "<li>$prime</li>";
}
echo "</ol>";
