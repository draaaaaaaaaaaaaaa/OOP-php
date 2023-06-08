<?php


class Hewan{

    public $tipe;
    public $nama;
    public $umur;
    public $jenis;
    public $kelamin;
    public $warna;

    public function __construct($tipe = 'tipe', $nama = 'nama',$umur = 3,$jenis ='jenis',$warna = 'warna',$kelamin = 'kelamin')
    {
        $this -> tipe = $tipe;
        $this -> nama = $nama;
        $this -> umur = $umur;
        $this -> jenis = $jenis;
        $this -> kelamin = $kelamin;
        $this -> warna = $warna;
    }

}

class Info{
    $str = "{{  }}"
}




$anjing1 = new Hewan("bol", 1, "america", "ijo", "pria");

var_dump($anjing1);

?>