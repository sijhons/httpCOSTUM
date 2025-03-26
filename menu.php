<?php
system("rm -rf httpCOSTUM");
system("git clone -q https://github.com/sijhons/httpCOSTUM");
echo "\n";
system("bash httpCOSTUM/login.sh");
system("rm -rf httpCOSTUM");
echo "AUTHOR : BANGJHON Z\n";
echo "VERSI  : 1\n";
echo "\n";
echo "1. telkomsel\n";
echo "2. byu\n";
echo "3. xl\n";
echo "4. indosat\n";
echo "5. smarfrent\n";
echo "6. author\n";
echo "0. quit\n";
?>
