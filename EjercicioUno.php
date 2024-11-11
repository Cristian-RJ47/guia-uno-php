<?php
//SERIE FIBONACCI
function generate_fibonacci($numero) {
    $result = [];

    if ($numero <= 0) {
        return $result;
    }
    
    $result[] = 0;
    if ($numero > 1) {
        $result[] = 1;
    }

    for ($i = 2; $i < $numero; $i++) {
        $result[] = $result[$i - 1] + $result[$i - 2];
    }

    return $result;
}

echo implode(", ", generate_fibonacci(7));
?>