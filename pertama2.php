<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');

if ($waktu >= 5 && $waktu < 11) {
    $sapaan = "selamat pagi";
}

elseif ($waktu >= 11 && $waktu < 15) {
    $sapaan  = "selamat siang";
}

elseif ($waktu >= 15 && $waktu < 19) {
    $sapaan  = "selamat sore";
}

else $sapaan = "selamat malam";

echo "{$sapaan}, {$nama} sekarang pukul {$waktu}\n";