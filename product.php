<?php


class Product {
    //Property
    public $judul = 'Judul';
    public $penulis = 'Penulis';
    public $harga = 'Harga';

    public function test1(){
        return "$this->penulis,$this->judul";
    }
}

// $product1 = new Product();
// $product1 -> judul = 'Naruto';
// var_dump($product1);


// $product2 = new Product();
// $product2 -> penulis = 'hahahha';
// var_dump($product2);

$product3 = new Product();
$product3 -> judul = 'Naruto';
$product3 -> penulis = 'Kisimoto';
$product3 -> harga = 30.000;
var_dump($product3);

echo "Komik : $product3->judul,$product3->penulis";
echo $product3->test1();

?>