<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


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
    public $jari_jari;

    public function __construct($jari_jari)  {

        $this->jari_jari = $jari_jari;
    }

    public function volbol() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}




class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;

    
    }
    public function volumeubung() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;

    }
        

}    



class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function __construct($jari_jari,$tinggi)  {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volumecut() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}





$kel_lingkaran = new Lingkaran(4);
$kel_lingkaran->luas();
$kel_lingkaran->keliling();



$vol_bola = new Bola(4);
$vol_bola->volbol();

$vol_tabung = new Tabung(4,10);
$vol_tabung->volumeubung();

$vol_cut = new Kerucut(4,10);
$vol_cut -> volumecut();




echo "luas lingkaran adalah:".  $kel_lingkaran->luas() . " \n";
echo "keliling lingkaran adalah" . $kel_lingkaran->keliling() . " \n";
echo "Volume Bola adalah" . $vol_bola->volbol() . " \n";
echo "Volume tabung adalah" . $vol_tabung->volumeubung() . " \n";
echo "Volume kerucut adalah" . $vol_cut->volumecut() . " \n";