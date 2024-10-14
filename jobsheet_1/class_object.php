<?php
//definisi class
class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim;
    public $jurusan;

     //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }
}
//instansiasi objek
$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "depi";
$mahasiswa->nim = "230102057";
$mahasiswa->jurusan = "jkb";

//menampilkan isi hasil data dari method tampilkanData
echo $mahasiswa->tampilkanData();
?>