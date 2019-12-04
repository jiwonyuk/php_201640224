<?php
session_start();
$_SESSION["username"] = "대남이";

setcookie("mynum","201640224",time()+(86400*30),"/");
