<?php
//definisi class 
class Pengguna {
    //property nama
    protected $nama; // Dapat diakses oleh kelas itu sendiri dan kelas turunan.
     
    //construct untuk menginisialisasi property
    public function __construct($nama){
        $this->nama = $nama;
    }

    //method untuk mendapatkan nilai property nama 
    public function getNama(){
        return $this->nama;
    }
}
//class Dosen yang mewarisi dari class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah; //property matakuliah yang private
     
    //construct untuk menginisialisasi property nama dan matakuliah
    public function __construct($nama, $mataKuliah){
        //menginisialisasi property nama dari class Pengguna
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    //Metode untuk mendapatkan mata kuliah
    public function getMataKuliah(){
        return $this->mataKuliah;
    }
}
//instansiasi objek class Dosen
$dosen1 = new Dosen("Devi Aryani", "P Web 2");
//mengakses property nama dan matakuliah
echo $dosen1->getNama() . "<br>"; //Menampilkan Output : Devi Aryani
echo $dosen1->getMataKuliah(); //Menampilkan Output : P Web 2

?>