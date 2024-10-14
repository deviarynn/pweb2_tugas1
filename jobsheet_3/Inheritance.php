<?php
//class parent
class Person {
    //property name 
    protected $name; //protected agar bisa diakses oleh kelas turunan

    //construct untuk menginisialisasi property name
    public function __construct($name){
        $this->name = $name;
    }

    //metode untuk mendapatkan name
    public function getName(){
        return $this->name;
    }
}
//class student yang mewarisi dari class person
class Student extends Person {
    //property tambahan khusus student
    public $studentID;

     // Constructor untuk menginisialisasi name dan studentID
    public function __construct($name, $studentID){
        // Memanggil constructor dari kelas induk
        parent::__construct($name);
        $this->studentID = $studentID;
    }

     // Metode untuk mendapatkan studentID
    public function getStudentID(){
        return $this->studentID;
    }
}
//instansisasi objek
$student = new Student("devi", "113");
//untuk menampilkan data dari metode getName
echo "Nama: " . $student->getName() . "<br>";
//untuk menampilkan data dari metode getStudentID
echo "ID: " . $student->getStudentID();
?>