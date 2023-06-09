<?php


class Hewan{

    public $tipe;
    public $nama;
    public $umur;
    public $jenis;
    public $kelamin;
    public $warna;
    public $temp;

    public function __construct($tipe = 'tipe', $nama = 'nama',$umur = 3,$jenis ='jenis',$warna = 'warna',$kelamin = 'kelamin',$temp = "temp")
    {
        $this -> tipe = $tipe;
        $this -> nama = $nama;
        $this -> umur = $umur;
        $this -> jenis = $jenis;
        $this -> kelamin = $kelamin;
        $this -> warna = $warna;
        $this -> temp = $temp;
    }

}

class Anjing extends Hewan
{
    public function InfoAnjing(){
        $str = "Nama Anjing : {$this->nama} ,
                umur : {$this->umur},
                jenis : {$this->jenis},
                warna : {$this->warna},
                gender : {$this->kelamin}";

                return $str;
    }
}






$hewan1 = new Anjing("bul", 1, "america", "ijo", "pria");

echo $hewan1->InfoAnjing();
?>