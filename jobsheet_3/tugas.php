<?php
//class parent
class Person {
    protected $name; // Dapat diakses oleh kelas itu sendiri dan kelas turunan.
         
    //construct untuk menginisialisasi property name
    public function __construct($name){
        $this->name = $name;
    }
    
    //method untuk mendapatkan name 
    public function getName(){
        return $this->name;
    }

    //metode getRole
    public function getRole(){
        return "Data lengkap";
    }
} 
//class dosen yang mewarisi dari person
class Dosen extends Person {
    private $nidn; //property nidn yang private

    //inisialisasi property name dan nidn
    public function __construct($name, $nidn){
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    //override untuk mengembalikan string dengan format khusus 
    public function getRole(){
        return "Dosen: $this->name, NIDN: $this->nidn ";
    }

    // Metode untuk mendapatkan nidn
    public function getNidn(){
        return $this->nidn;
    }
}
//class mahasiswa yang mewarisi dari person
class Mahasiswa extends Person {
    //property nim yang private
    private $nim;

    //inisialisasi property name dan nim
    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    //override untuk mengembalikan string dengan format khusus 
    public function getRole(){
        return "Mahasiswa: $this->name, NIM: $this->nim";
    }

    // Metode untuk mendapatkan nim
    public function getNim(){
        return $this->nim;
    }
}
//class abstrak Jurnal
abstract class jurnal {
    /*metode yang tidak memiliki implementasi dalam kelas 
    abstrak dan harus di implementasikan dalam kelas turunannya*/
    abstract public function getJurnal();
}
//class jurnaldosen yang mewarisi dari jurnal
class JurnalDosen extends jurnal{
    //property dosen
    private $dosen;

    //inisialisasi property dosen
    public function __construct($dosen){
        $this->dosen = $dosen;
    }

    //implementasi metode getJurnal() dari class abstrak Jurnal
    public function getJurnal() {
        return "Jurnal Dosen: $this->dosen .";
    }
}
//class JurnalMahasiswa yang mewarisi class Jurnal
class JurnalMahasiswa extends jurnal {
    //property mahasiswa
    private $mahasiswa;

    //inisialisasi property mahasiswa
    public function __construct($mahasiswa){
        $this->mahasiswa = $mahasiswa;
    }

    //implementasi metode getJurnal() dari class abstrak Jurnal
    public function getJurnal() {
        return "Jurnal mahasiswa: $this->mahasiswa .";
    }
}
//instansiasi objek
$dosen1 = new Dosen("Devi Aryani", "234");
$mahasiswa = new Mahasiswa("karrel", "2402001");
$dosen = new JurnalDosen("Program PHP" );
$mahasiswa1 = new JurnalMahasiswa("Basis Data");

//pemanggilan method untuk dosen
echo "Dosen:" . $dosen1->getName() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";
echo "Data: " . $dosen1->getRole() . "<br>";
echo $dosen->getJurnal() . "<br>"."<br>";

//pemanggilan method untuk mahasiswa
echo "Mahasiswa: " . $mahasiswa->getName() . "<br>";
echo "NIM: " . $mahasiswa->getNim() . "<br>";
echo "Data: " . $mahasiswa->getRole() . "<br>";
echo $mahasiswa1->getJurnal() . "<br>";
?>