<?php
    $body = file_get_contents("page.htm");
    $first = $_GET['v1'];                   //[]선택 , 변수 뒤에 [] = 배열
    $body = str_replace("{{first}}",$first,$body);

    $last = $_GET['v2'];        
    $body = str_replace("{{last}}",$last,$body); 

    echo $body;

    //워킹 디렉터리 ->스테이지 :add , 스테이지 -> 저장소 저장 :commit
    //dir -> php -S localhost:8000 서버 띄우기
    //$ 변수
