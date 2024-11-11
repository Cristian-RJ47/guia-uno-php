<?php
//SON PALINDROMOS?
function is_palindromo($cadena) {
    $cadenaLimpia = strtolower(str_replace(' ', '', $cadena));
    
    return $cadenaLimpia === strrev($cadenaLimpia);
}

function message($response){
    if($response){
        echo "su mensaje es un palindromo"."<br>";
    }else{
        echo "su mensaje no es un palindromo"."<br>";
    }
}
message(is_palindromo("anilina"));
message(is_palindromo("A man a plan a canal Panama"));
message(is_palindromo("palabra"));

?>