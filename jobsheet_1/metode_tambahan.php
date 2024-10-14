<?php
//definisi class
class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;

    //constructor untuk menginisialisasi atribut atau preoperty
    public function  __construct($nama, $nim, $jurusan){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

     //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

    //method atau fungsi untuk mengupdate jurusan
    public function updateJurusan($jurusanNew){
        $this->jurusan = $jurusanNew;
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa("depii", "230102057", "jkb");

//untuk mengupdate jurusan 
$mahasiswa->updateJurusan("ti");

//menampilkan isi hasil data dari method tampilkanData
echo $mahasiswa->tampilkanData();
?>