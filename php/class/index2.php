<?php
// 선언
class foo
{
    // 변수, 함수
    public $name; // 프로퍼티
    public static $daelim = "대림대학교";

    public function hello()
    {
        echo self::$daelim.">> ";
        echo $this->name. "짱이에요<br>";
        // echo self::$name. "일까요?<br>";
        return $this;
    }

    public function greeting()
    {
        echo  "반가와요<br>";
        return $this;
    }
}

// 생성
$obj1 = new foo;
$obj1->name = "대림이";  // 객체 프로퍼티 값을 저장
$obj1->hello();

$obj2 = new foo;
$obj2->name = "대숙이";
$obj2->hello();

foo::$daelim = "우주최강";
$obj1->hello();
$obj2->hello();

/*
// 호출
$result = $obj->hello(); // $this
// $result == $this == $obj
$result->hello()->greeting();

echo "====<br>";

$obj2 = new foo;
$obj2->name = "대숙이";


// 선언
class bar
{
    public static $name;

    public static function username()
    {
        echo self::$name."입니다.";
    }
}

bar::$name = "고정값";  // :: 정적호출 소스파일을 직접 넣음  ,  . 인스턴스 호출
bar::username();

