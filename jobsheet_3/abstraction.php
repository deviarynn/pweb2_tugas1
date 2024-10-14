<?php
//class abstrak
abstract class Course {
    //metode yang tidak memiliki implementasi dalam kelas abstrak dan harus di implementasikan dalam kelas turunannya
    abstract public function getCourseDetails();
}
//class onlinecourse yang mewarisi class course
class OnlineCourse extends Course{
    //property class onlinecourse yang private
    private $pengajar;
    private $matkul;

    //construct yang menginisialisasi property pengajar dan matkul
    public function __construct($pengajar, $matkul){
        $this->pengajar = $pengajar;
        $this->matkul = $matkul;
    }

    //implementasi metode getCourseDetails() dari class abstrak course
    public function getCourseDetails() {
        return "Online Course dengan pengajar: $this->pengajar dan matkul $this->matkul.";
    }
}
//class offlinecourse yang mewarisi class course
class OfflineCourse extends Course {
    //property class offlinecourse yang private
    private $tempat;
    private $hari;

     //construct yang menginisialisasi property pengajar dan matkul
    public function __construct($tempat, $hari){
        $this->tempat = $tempat;
        $this->hari = $hari;
    }

    //implementasi metode getCourseDetails() dari class abstrak course
    public function getCourseDetails() {
        return "Online Course dengan tempat: $this->tempat dan hari $this->hari.";
    }
}
//instansiasi objek dari class Onlinecourse
$online = new OnlineCourse("sarah", "pweb");
//instansiasi objek dari class Offlinecourse
$offline = new OfflineCourse("kampus", "rabu");
//pemanggilan metode getCourseDetails() dari objek online dan offline
echo $online->getCourseDetails() . "<br>";
echo $offline->getCourseDetails();

?>