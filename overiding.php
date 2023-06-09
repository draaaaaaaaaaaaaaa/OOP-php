<?php


class Hewan{

    public $tipe;
    public $nama;
    public $umur;
    public $jenis;
    public $gender;
    public $warna;
    public $temp;

    public function InfoHewan()
    {
        $str = " {$this->nama} ,
        umur : {$this->umur},
        jenis : {$this->jenis},
        warna : {$this->warna},
        gender : {$this->gender}";

        return $str;
    }

    public function __construct($tipe = 'tipe', $nama = 'nama',$umur = 3,$jenis ='jenis',$warna = 'warna',$gender = 'gender',$temp = "temp")
    {
        $this -> tipe = $tipe;
        $this -> nama = $nama;
        $this -> umur = $umur;
        $this -> jenis = $jenis;
        $this -> gender = $gender;
        $this -> warna = $warna;
        $this -> temp = $temp;

    }

}

class Anjing extends Hewan
{
    public $gonggong ;

    public function __construct($tipe = 'tipe', $nama = 'nama',$umur = 3,$jenis ='jenis',$warna = 'warna',$gender = 'gender',$temp = "temp",$gonggong = "gong")
    {
        parent::__construct($tipe = 'tipe', $nama = 'nama',$umur = 3,$jenis ='jenis',$warna = 'warna',$gender = 'gender',$temp = "temp");

        $this->gonggong = $gonggong;
    }


    public function InfoHewan(){
        $str = "Nama Anjing : " . parent::InfoHewan() . "sehari";

                return $str;
    }
}








$hewan1 = new Anjing("bul", 1, "america", "ijo", "pria",5);

echo $hewan1->InfoHewan();
?>