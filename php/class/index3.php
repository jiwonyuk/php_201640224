<?php

class daelim
{
    public function __construct()
    {
        echo __CLASS__ . "이 생성이 되었습니다.<br>";
        //$this->hello();
    }

    final public function hello()      // 덮어쓰기 막기위해 final
    {
        echo "학교가 너무 높아요..<br>";
    }
}

class food extends daelim   
{
    public function menu()
    {
        echo "맛이 없음.<br>";
    }

    /*
    public function hello()    
    {
        echo "학교가 너무 멀어요..";
    }
    */
}

$obj1 = new food;
$obj1->hello();
$obj1->menu();