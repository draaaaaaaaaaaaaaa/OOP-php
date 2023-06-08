<?php

class Mobil {
    public $nama,$merk,$warna,
           $kecepatanmaksimal,
           $jumlahpenumpang;

    public function tambahkecepatan(){
        return "Kecepatan Bertambah!";
    }
}

class MobilSport extends Mobil{
    public $turbo = false;

    public function jalankanturbo()
    {
        $this -> turbo = true;
        return "turbo di jalankan";
    }

}

$mobil1 = new MobilSport();
echo $mobil1 -> tambahkecepatan();
echo "<br>";
echo $mobil1 -> jalankanturbo();



?>