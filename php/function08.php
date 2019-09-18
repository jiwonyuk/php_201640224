<?php

function hello()
{
    echo "1. 안녕하세요.<br>";
    yield "11";

    /*
    echo "2. 잘가세요.<br>";
    yield "2";
    echo "3. 곧 끝남<br>";
    yield "3";
    echo "4. 할게 남았다.<br>";
*/
}

hello();