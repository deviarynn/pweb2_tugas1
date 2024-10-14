<?php
//definisi class Pengguna
class Pengguna {
    protected $nama; //property protected untuk nama

    //constructor untuk menginisialisasi nama
    public function __construct($nama){
        $this->nama = $nama;
    }

    //metode aksesFitur 
    public function aksesFitur(){
        return $this->nama;
    }
}
//class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $matkul; //property matkul yang private

    //constructor untuk menginisialisasi matkul dan nama
    public function __construct ($nama, $matkul){
        $this->nama = $nama;
        $this->matkul = $matkul;
    }

    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Dosen $this->nama mengajar $this->matkul";
    }
}
//class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna {
    private $studentID; //property studentID yang private
   
    //constructor untuk menginisialisasi studentID dan nama
    public function __construct ($nama, $studentID){
        $this->nama = $nama;
        $this->studentID = $studentID;
    }

    //implementasi metode aksesFitur
    public function aksesFitur(){
        return "Nama $this->nama dengan ID $this->studentID ";
    }
}

// instansi objek dari class dosen dan mahasiswa
$dosen = new Dosen("renata", "matdis");
$mahasiswa = new Mahasiswa("vava", "111");

//pemanggilan metode aksesFitur
echo $dosen->aksesFitur() . "<br>"; //Menampilkan Output dosen
echo $mahasiswa->aksesFitur(); //menampilkan output mahasiswa
?>