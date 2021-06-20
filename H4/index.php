<?php
function omrekenen($a){
    $c = ($a * 1.8) + 32;
    return $c;
}

function delen($a){
    if ($a % 3 == 0){
        $x = true;
    } else {
        $x = false;
    }
    return $x;
}

function omgekeert($a){
    $a = strrev($a);
    return $a;
}
echo strrev("hallo");
