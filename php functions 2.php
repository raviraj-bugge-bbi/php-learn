<?php

function addNumbers2(int $a, int $b = 5) {
    $c = $a + $b; 
    return $c;
}
echo addNumbers2(5);
?>