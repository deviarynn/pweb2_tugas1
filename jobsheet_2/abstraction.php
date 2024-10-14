<?php
//class abstrak
abstract class Pengguna {
    //metode yang tidak memiliki implementasi dalam kelas abstrak dan harus di implementasikan dalam kelas turunannya
    abstract public function aksesFitur();
}
//class dosen yang mewarisi dari class Pengguna
class Dosen extends Pengguna {
    
    //implementasi metode  abstrak aksesFitur yang didefinisikan dalam kelas pengguna
    public function aksesFitur(){
        return "Fitur Masukan Nilai";
    }
}
//class Mahasiswa yang mewarisi dari class Pengguna
class Mahasiswa extends Pengguna {
   
    //implementasi metode  abstrak aksesFitur yang didefinisikan dalam kelas pengguna
    public function aksesFitur(){
        return "Fitur lihat nilai";
    }
}
// instansi objek dari class dosen 
$dosen = new Dosen();
//menampilkan output dari metode aksesFitur
echo $dosen->aksesFitur() . "<br>";

//instansiasi objek dari class mahasiswa
$mahasiswa = new Mahasiswa();
//menampilkan output dari metode aksesFitur
echo $mahasiswa->aksesFitur();
?>