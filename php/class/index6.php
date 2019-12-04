<?php

class aaa
{
    use abcd;
}

trait abcd    // trait 원하는 것만 가져오기
{
    public function join()
    {
        echo "나도 끼워줘..";
    }
}

$obj = new aaa;
$obj->join();