<?php
//definisi class
class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $jurusan; //aksesbilitas PUBLIC dapat diakses dari mana saja

    //construct untuk menginisialisasi atribut atau preoperty nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode atau function tampilData
    public function tampilData(){
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}
//instansiasi objek
$mahasiswa1 = new Mahasiswa("Devi Aryani", "230102057", "komputer dan bisnis");
//menampilkan informasi tentang objek 
echo $mahasiswa1->tampilData(); //output : Nama: Devi Aryani, NIM: 230102057, Jurusan: komputer dan bisnis
?>
