<?php

if(function_exists("daelim")) {
    echo "함수명이 있어요.<br>";
}else{
    function daelim($name, $num) :array
{
    echo "대림대학교<br>"; 
    // echo $name . " = " . $num;
    $arr = [$name, $num];          //[] 이용해서 함수 만들 수 있다.
    return $arr;
}
}