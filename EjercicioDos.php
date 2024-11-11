<?php
//SON NÚMEROS PRIMOS?
function is_cousin($numero) {
    if ($numero <= 1) {
        echo "su número no es primo". "<br>";
    }else{
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                echo "su número no es primo". "<br>";
            }else{
                echo "su número es primo". "<br>";
            }
        }
    }
}

is_cousin(7);
is_cousin(6);
is_cousin(1);
?>