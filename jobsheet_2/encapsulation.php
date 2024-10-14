<?php
// definisi class Mahasiswa
class Mahasiswa {
    private $nama; // Deklarasi properti 'nama' dengan akses private, hanya dapat diakses di dalam kelas Mahasiswa.
    private $nim; // Deklarasi properti 'nim' dengan akses private, hanya dapat diakses di dalam kelas Mahasiswa.
    private $jurusan; // Deklarasi properti 'jurusan' dengan akses private, hanya dapat diakses di dalam kelas Mahasiswa.

    // Constructor untuk menginisialisasi nilai properti ketika objek diinstansiasi.
    public function __construct($nama, $nim, $jurusan){
        // Inisialisasi properti dengan nilai yang diterima melalui parameter.
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode getter untuk mengakses properti 'nama' di luar kelas.
    public function getNama(){
        return $this->nama; // Mengembalikan nilai properti 'nama'.
    }

    // Metode getter untuk mengakses properti 'nim' di luar kelas.
    public function getNim(){
        return $this->nim; // Mengembalikan nilai properti 'nim'.
    }

    // Metode getter untuk mengakses properti 'jurusan' di luar kelas.
    public function getJurusan(){
        return $this->jurusan; // Mengembalikan nilai properti 'jurusan'.
    }

    // Metode setter untuk mengubah nilai properti 'nama'.
    public function setNama($nama){
        $this->nama = $nama; // Mengatur ulang nilai properti 'nama'.
    }

    // Metode setter untuk mengubah nilai properti 'nim'.
    public function setNim($nim){
        $this->nim = $nim; // Mengatur ulang nilai properti 'nim'.
    }

    // Metode setter untuk mengubah nilai properti 'jurusan'.
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan; // Mengatur ulang nilai properti 'jurusan'.
    }
}

// Membuat objek 'mahasiswa1' dari kelas Mahasiswa dengan data awal.
$mahasiswa1 = new Mahasiswa ("Devi Aryani", "230102057", "komputer dan bisnis");

// Menampilkan data awal menggunakan metode getter.
echo "Data Awal : \n<br>";
echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>"; // Menampilkan nama mahasiswa.
echo "NIM: " . $mahasiswa1->getNim() . "<br>"; // Menampilkan NIM mahasiswa.
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>"; // Menampilkan jurusan mahasiswa.

// Mengubah data mahasiswa dengan metode setter.
$mahasiswa1->setNama("darren"); // Mengganti nama mahasiswa.
$mahasiswa1->setNim("34567"); // Mengganti NIM mahasiswa.
$mahasiswa1->setJurusan("Teknik Informatika"); // Mengganti jurusan mahasiswa.

// Menampilkan data setelah diubah menggunakan metode getter.
echo "<br>\nData Setelah Diubah : \n<br>";
echo "Mahasiswa: " . $mahasiswa1->getNama() . "<br>"; // Menampilkan nama mahasiswa yang sudah diubah.
echo "NIM: " . $mahasiswa1->getNim() . "<br>"; // Menampilkan NIM mahasiswa yang sudah diubah.
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>"; // Menampilkan jurusan mahasiswa yang sudah diubah.
?>
