<?php

// 함수 선언
function hello($name="++",int $a,int $b):int
{
    $sum = $a + $b;
    echo "반가워요 ".$name . "=" . $sum. "<br>";     
    // 반환값
    return $sum;
}

// 함수 호출
$user = "대남이";
$s = hello($user,'1',"2");
echo "합계는=".$s;
