<?php
//definisi class student
class Student{
    //property private
    private $name;
    private $studentID;

    //constructor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID){
        $this->name = $name;
        $this->studentID = $studentID;
    }

    //Getter untuk name
    public function getName(){
        return "Nama: " . $this->name;
    }

    //Getter untuk studentID
    public function getStudentID(){
        return "ID: " . $this->studentID;
    }

    //Setter untuk name
    public function setName($name){
        $this->name = $name;
    }

    //Setter untuk StudentID
    public function setStudentID($studentID){
        $this->studentID = $studentID;
    }
}
//instansiasi objek dari class student
$student = new Student("lala", "345");

// Mengakses data melalui metode getter
echo $student->getName() . "<br>";
echo $student->getStudentID() . "<br>";

// Mengubah data melalui metode setter
$student->setName("rara");
$student->setStudentID("321");

// Menampilkan data yang sudah diubah
echo $student->getName() . "<br>";
echo $student->getStudentID();
?>