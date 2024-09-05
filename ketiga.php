<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    
    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public  $jari_jari;

    public function volumebol() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;    
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;    
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}




$nasi_tumpeng = new Kerucut();
$volume_nasi_tumpeng = $nasi_tumpeng->volume(4,10);
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;

$lingkaran = new Lingkaran();
$lingkaran -> jari_jari = 4;

$volbol = new Bola();
$volbol-> jari_jari = 4;

$tabung = new Tabung();
$tabung -> jari_jari = 4;
$tabung -> tinggi = 10;



echo "$volume_nasi_tumpeng";
echo "volume kerucut adalah" .$nasi_tumpeng->volume() . "\n";
echo "luas lingkaran adalah:".  $lingkaran->luas() . " \n";
echo "keliling lingkaran adalah" . $lingkaran->keliling() . " \n";
echo "Volume Bola adalah" . $volbol->volumebol() . " \n";
echo "Volume tabung adalah" . $tabung->volume() . " \n";