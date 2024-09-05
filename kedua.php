<?php


function kelilingLingkaran($jari) : float {
    return 3.14*$jari*2;

}

function volbol($jari) : float {
    return 4/3*3.14*$jari**3;
    
}

function volbung($jari,$tinggi) : float {
    return 3.14*$jari**2*$tinggi;
    
}

function volcut($jari,$tinggi) : float {
    return 1/3*3.14*$jari*$jari*$tinggi;
    
}




$jari = 4;
$tinggi = 10;
echo "Keliling Lingkaran adalah" . kelilingLingkaran($jari) . "\n";
echo "volume bola adalah" . volbol($jari). "\n";
echo "volume Tabung adalah" . volbung($jari,$tinggi). "\n";
echo "volume kerucut adalah" . volcut($jari,$tinggi). "\n";

