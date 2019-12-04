<?php
include "../hello10.php";                  // include 몇 줄 넣어도 상관 x
print "반갑습니다.<br>";
require "./hello/hello12.php";          //  @ 오류 제어 연산자
                                        //require 중복사용가능 
include "../hello10.php";              //  ./ 뒤   ../ 앞