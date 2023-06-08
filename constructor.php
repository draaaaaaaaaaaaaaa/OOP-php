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
        return "$this->penulis,$this->judul";
    }
}



$product3 = new Product("Naruto","masasikisimoto",30.000);


$product4 = new Product("Naruto Strom", "Sony",100.00);




echo "Komik : $product3->judul,$product3->penulis";
echo $product3->test1();

?>