<?php


class Product {
    //Property
    public $judul = 'Judul';
    public $penulis = 'Penulis';
    public $harga = 'Harga';

    public function __construct( $judul, $penulis, $harga)
    {
        $this->judul = $judul;
        $this->penulis= $penulis;
        $this->harga = $harga;
    }

    public function test1(){
        return "$this->penulis";
    }
}

class CetakIfoProduct{
    public function cetak($product){
        $str = "{$product->judul} | {$product -> test1()} (Rp. {$product->harga})";
        return $str;
    }
}



$product3 = new Product("Naruto","masasikisimoto",30.000);


$product4 = new Product("Naruto Strom", "Sony",100.00);





$infoProduct1 = new CetakIfoProduct();
echo $infoProduct1->cetak($product3);

?>