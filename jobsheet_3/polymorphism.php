<?php
//definisi class person
class Person {
    protected $name; //property name yang protected

    //untuk menginisialisasi name
    public function __construct($name){
        $this->name = $name;
    }

    //metode untuk mendapatkan name
    public function getName(){
        return $this->name;
    }
}
//class teacher yang mewarisi dari person
class Teacher extends Person {
    public $teacherID; //property teacherID

    //menginisialisasi property name dan teacherID
    public function __construct ($name, $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override metode getName untuk menampilkan format khusus Teacher
    public function getName(){
        return "Teacher: " . $this->name ;
    }

    //metode mendapatkan property teacherID
    public function getTeacherID(){
        return $this->teacherID;
    }
}
class Student extends Person {
    public $studentID;

    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override metode getName untuk menampilkan format khusus Student
    public function getName(){
        return "Student: " . $this->name;
    }

    //mendapatkan nilai dari property studentID
    public function getStudentID(){
        return $this->studentID;
    }
}
//instansiasi objek dari class Teacher dan Student
$teacher = new Teacher("deandra", "133");
$student = new Student("caca", "221");

//Menampilkan hasil dari metode getName
echo $teacher->getName() . "<br>"; //output Student: yuyu
echo $student->getName(); //output Student: roro

?>