<?php



// Fungsi untuk menampilkan warna
function warna($text, $color) {
    $colors = array(
        'merah' => "\033[31m",
        'hijau' => "\033[32m",
        'kuning' => "\033[33m",
        'biru' => "\033[34m",
        'ungu' => "\033[35m",
        'cyan' => "\033[36m",
        'putih' => "\033[37m"
    );
    return $colors[$color] . $text . "\033[0m";
}

system("rm -rf httpCOSTUM");
system("git clone -q https://github.com/sijhons/httpCOSTUM");
//echo "\n";
system("bash httpCOSTUM/login.sh");
system("rm -rf httpCOSTUM");
echo warna("    AUTHOR : BANGJHON Z", "ungu") . "\n";
echo warna("VERSI SCRIPT : 1", "ungu") . "\n";
echo warna("HTTPS CUSTOM : 5.3.26-RC77", "ungu") . "\n";
echo warna("id : ", "ungu" . "");
system("cat $HOME/../usr/bin/mr45card/id");
echo "\n";
sleep(1);
echo warna("1. ", "biru") . "";
usleep(100000);
echo warna("telkomsel", "hijau") . "\n";
usleep(100000);
echo warna("2. ", "biru") . "";
usleep(100000);
echo warna("byu", "hijau") . "\n";
usleep(100000);
echo warna("3. ", "biru") . "";
usleep(100000);
echo warna("xl", "hijau") . "\n";
usleep(100000);
echo warna("4. ", "biru") . "";
usleep(100000);
echo warna("indosat", "hijau") . "\n";
usleep(100000);
echo warna("5. ", "biru") . "";
usleep(100000);
echo warna("smartfren", "hijau") . "\n";
usleep(100000);
echo warna("6. ", "biru") . "";
usleep(100000);
echo warna("author", "hijau") . "\n";
usleep(100000);
echo warna("0. ", "biru") . "";
usleep(100000);
echo warna("quit", "hijau") . "\n";
usleep(100000);
?>
