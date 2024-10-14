<?php
//definisi class
class Buku{
    //atribut atau properties
    public $judul;
    public $penulis;

    //constructor
    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    //metode atau function
    public function tampilkanInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

//instansi objek
$buku1 = new Buku("Pemograman PHP", "Devi Aryani");
echo $buku1->tampilkanInfo();
?>