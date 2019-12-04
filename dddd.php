<?php

function sum($a, $b, $c=4){
    if($c){
        return $a+$b*$c;
    }
    return $a*$b;
}

echo sum(2,1);