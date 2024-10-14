# PWEB 2

 <h3><b>OBJECT ORIENTED PROGRAMMING</b></h3>
 <p>OOP (Object-Oriented Programming) adalah sebuah pendekatan pemrograman yang berpusat pada objek, di mana data dan perilakunya digabungkan dalam satu unit yang disebut objek. Prinsip-prinsip utama OOP meliputi enkapsulasi (menggabungkan data dan fungsi), pewarisan (mewarisi sifat dari kelas lain), polimorfisme (kemampuan objek untuk memiliki banyak bentuk), dan abstraksi (menyederhanakan sistem dengan menyembunyikan detail yang tidak relevan). OOP memudahkan pengelolaan kode, membuatnya lebih modular, dapat digunakan kembali, dan lebih mudah dipelihara.</p>
<h4>Komponen Utama Penyusun OOP</h4>
<p><b>1. Kelas (Class)</b></p>
<p>Blueprint atau cetak biru yang mendefinisikan atribut (data/properties) dan perilaku (metode/functions) dari objek. Kelas adalah template untuk membuat objek.</p>

<p><b>2. Object</b></p>
<p>Instansi dari kelas. Objek memiliki data dan perilaku yang sudah ditentukan oleh kelas, serta dapat berinteraksi dengan objek lain.</p>

<p>Contoh Class dan Object:</p>
          
          //definisi class
          class Buku{
          //atribut atau properties
          public $judul;
          public $penulis;

            //constructor
            public function __construct($judul, $penulis){
                $this->judul = $judul;
                $this->penulis = $penulis;
            }
            //metode atau function
            public function tampilkanInfo(){
                return "Judul: $this->judul, Penulis: $this->penulis";
            }
        }

        //instansi objek
        $buku1 = new Buku("Pemograman PHP", "Devi Aryani");
        echo $buku1->tampilkanInfo();
        ?>

<p><b>3. Enskapsulasi</b></p>
<p>Proses membungkus data dan metode yang terkait dalam satu unit, yaitu objek. Enkapsulasi juga melibatkan penyembunyian detail internal objek dari luar (data hiding) dan memberikan akses melalui metode khusus (getter/setter)</p>

<p>Contoh Enskapsulasi</p>
    
    class Buku {
        private $judul;
        private $penulis;

        public function __construct($judul, $penulis) {
            $this->judul = $judul;
            $this->penulis = $penulis;
        }

        public function getJudul() {
            return $this->judul;
        }

        public function setJudul($judul) {
            $this->judul = $judul;
        }
    }

    $buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
    echo $buku1->getJudul(); // Output: Pemrograman PHP
    ?>


<p><b>4. Abstraksi (Abstraction)</b></p>
<p>Proses menyembunyikan kompleksitas sistem dengan hanya menampilkan fitur penting dan menyembunyikan detail yang tidak diperlukan. Hal ini memungkinkan fokus pada hal-hal penting tanpa terganggu oleh detail implementasi.</p>

<p><b>5. Pewarisan (Inheritance)</b></p>
<p>Mekanisme di mana sebuah kelas dapat mewarisi properti dan metode dari kelas lain. Kelas yang mewariskan disebut superclass, sementara kelas yang mewarisi disebut subclass.</p>

<p><b>6. Polimorfisme (Polymorphism)</b></p>
<p>Kemampuan objek untuk mengambil berbagai bentuk, biasanya melalui metode overriding dan overloading. Polimorfisme memungkinkan satu metode dapat digunakan untuk berbagai tipe objek, sehingga meningkatkan fleksibilitas program.</p>

# Modul 1

 <h3>Jobsheet 1</h3>
 <h4>1. Membuat Class dan Object</h4>
 <p>-Definisi class Mahasiswa</p>
     
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
    
 <p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>
    
 <p>-Metode tampilkanData</p>

    //method atau fungsi untuk tampil data
    public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }

  <p>metode ini digunakan untuk menampilkan data</p>

  <p>-Instansiasi Object</p>

    $mahasiswa = new Mahasiswa();

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>

    $mahasiswa->nama = "depi";
    $mahasiswa->nim = "230102057";
    $mahasiswa->jurusan = "jkb";

<p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>
<p>-Berikut full kodenya</p>

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
      
<p>Output yang dihasilkan</p>

![Screenshot (684)](https://github.com/user-attachments/assets/174779cf-8943-4aca-b2e3-1a7322199284)


  -------------------------------------------------------------------------
<h4>2. Implementasi Constructor</h4>
 <p>-Definisi class Mahasiswa</p>
     
    class Mahasiswa {
      /*atribut atau properties untuk menyimpan
       data atau keadaan dari objek*/
      public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
      public $nim;
      public $jurusan;

      public function  __construct($nama, $nim, $jurusan){
      $this->nama = $nama;
      $this->nim = $nim;
      $this->jurusan = $jurusan;
      }

       //method atau fungsi untuk tampil data
       public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
    }
    
 <p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>

<p>-Menambahkan metode constructor</p>

    //constructor untuk menginisialisasi atribut atau preoperty
    public function  __construct($nama, $nim, $jurusan){
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    }

 <p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class mahasiswa diinstansiasi(dibuat sebuah object).<br>
 Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nim, dan jurusan, dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class mahasiswa, yaitu property nama, nim, dan jurusan</p>

  <p>-Metode tampilkanData</p>

     //method atau fungsi untuk tampil data
     public function tampilkanData(){
        return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
     }

  <p>metode ini digunakan untuk menampilkan data</p>

  <p>-Instansiasi Object</p>

     $mahasiswa = new Mahasiswa("depii", "230102057", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>-Berikut full kodenya</p>

    <?php
    //definisi class
    class Mahasiswa {
        /*atribut atau properties untuk menyimpan
        data atau keadaan dari objek*/
        public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
        public $nim;
        public $jurusan;

        //constructor untuk menginisialisasi atribut atau preoperty
        public function  __construct($nama, $nim, $jurusan){
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
        }

         //method atau fungsi untuk tampil data
         public function tampilkanData(){
            return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
        }
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("depii", "230102057", "jkb");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>

<p>Berikut Output yang dihasilkan</p>

![Screenshot (686)](https://github.com/user-attachments/assets/e61c581a-a4e2-4246-af7e-f92511f7d4ed)

------------------------------------------------------------------------
<h4>3. Membuat Metode Tambahan</h4>
 <p>-Definisi class Mahasiswa</p>
     
    //definisi class
    class Mahasiswa {
       /*atribut atau properties untuk menyimpan
        data atau keadaan dari objek*/
       public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
       public $nim;
       public $jurusan;
   
       //constructor untuk menginisialisasi atribut atau preoperty
       public function  __construct($nama, $nim, $jurusan){
       $this->nama = $nama;
       $this->nim = $nim;
       $this->jurusan = $jurusan;
       }
   
        //method atau fungsi untuk tampil data
        public function tampilkanData(){
           return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this-    >jurusan";
       }
   
       //method atau fungsi untuk mengupdate jurusan
       public function updateJurusan($jurusanNew){
           $this->jurusan = $jurusanNew;
       }
    }

<p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu $nama, $nim, $jurusan.</p>
  
  <p>-Metode updateJurusan</p>

    //method atau fungsi untuk mengupdate jurusan
    public function updateJurusan($jurusanNew){
        $this->jurusan = $jurusanNew;
    }

  <p>Metode ini digunakan untuk mengubah jurusan dari objek yang sudah dibuat. Variable $jurusanNew merupakan tempat untuk nilai atau value dari jurusan baru</p>

   <p>-Instansiasi Object</p>

    $mahasiswa = new Mahasiswa("depii", "230102057", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

    //untuk mengupdate jurusan 
    $mahasiswa->updateJurusan("ti");

 <p>Kode ini untuk memanggil method updateJurusan dan mengubah isi pada property jurusan yang sudah di isi sebelumnya dari "jkb" menjadi "ti"</p>

    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>-Berikut full kodenya</p>

    <?php
    //definisi class
    class Mahasiswa {
        /*atribut atau properties untuk menyimpan
         data atau keadaan dari objek*/
        public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
        public $nim;
        public $jurusan;
    
        //constructor untuk menginisialisasi atribut atau preoperty
        public function  __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        }
    
         //method atau fungsi untuk tampil data
         public function tampilkanData(){
            return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
        }
    
        //method atau fungsi untuk mengupdate jurusan
        public function updateJurusan($jurusanNew){
            $this->jurusan = $jurusanNew;
        }
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("depii", "230102057", "jkb");
    
    //untuk mengupdate jurusan 
    $mahasiswa->updateJurusan("ti");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>

  <p>Berikut Output yag dihasilkan</p>

![Screenshot (699)](https://github.com/user-attachments/assets/eaa8a29a-8fff-47f3-ac03-0c20a52e9e3c)
   
  -----------------------------------------------------------------------
 <h4>4. Penggunaan Atribut dan Metode</h4>
 <p>-Definisi class Mahasiswa</p>
     
    //definisi class
    class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
       public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
       public $nim;
       public $jurusan;

 <p>Class Mahasiswa : class ini memiliki tiga Property atau atributte yaitu 
    $nama, $nim, $jurusan</p>

 <p>-Metode Setter</p>

    //method atau fungsi untuk setter nim
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

  <p>Metode setter ini akan mengatur nilai property nim dari objek mahasiswa</p>
  
  <p>-Instansiasi Object</p>

    $mahasiswa = new Mahasiswa("deviiaryn", "230102057", "jkb");

  <p>Object : $mahasiswa adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>

     //untuk men set nilai property ($nama_object->nama_property=nilai)
     $mahasiswa->setNim("123");

  <p>Kode diatas akan memanggil metode setNim pada objek $mahasiswa dan menetapkan nilai "123" sebagail nilai dari property nim</p>
  
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();

<p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

<p>Berikut full kodenya </p>

    <?php
    //definisi class
    class Mahasiswa {
       /*atribut atau properties untuk menyimpan
        data atau keadaan dari objek*/
       public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
       public $nim;
       public $jurusan;
   
       //constructor untuk menginisialisasi atribut atau preoperty
       public function  __construct($nama, $nim, $jurusan){
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
       }
   
        //method atau fungsi untuk tampil data
        public function tampilkanData(){
           return "Nama: $this->nama , Nim: $this->nim, Jurusan: $this->jurusan";
       }
   
        //method atau fungsi untuk mengupdate jurusan
        public function updateJurusan($jurusanNew){
           $this->jurusan = $jurusanNew;
       }
   
        //method atau fungsi untuk setter nim
        public function setNim($nimBaru){
           $this->nim = $nimBaru;
       }
   
    }
    //instansiasi objek
    $mahasiswa = new Mahasiswa("deviiaryn", "230102057", "jkb");
    
    //untuk men set nilai property ($nama_object->nama_property=nilai)
    $mahasiswa->setNim("123");
    
    //menampilkan isi hasil data dari method tampilkanData
    echo $mahasiswa->tampilkanData();
    ?>


<p>Berikut Output hasilnya</p>

![Screenshot (687)](https://github.com/user-attachments/assets/ec3584b4-691c-445f-9ecd-421a3499fa1f)

-------------------------------------------------------------------------
<h3>Tugas Modul 1</h3>
<p>Definisi class</p>

       //definisi class
       class Dosen {
          /*atribut atau properties untuk menyimpan
           data atau keadaan dari objek*/
          public $nama;
          public $nip; //aksesbilitas PUBLIC dapat diakses dari mana saja
          public $mataKuliah;
        }

 <p>Class Dosen : Di class ini memiliki tiga property yaitu nama, nip, dan mataKuliah</p>

    //constructor untuk menginisialisasi atribut atau property
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
<p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class dosen diinstansiasi(dibuat sebuah object).<br>
 Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nip, dan mataKuliah dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class dosen, yaitu property nama, nip, dan mataKuliah</p>

    //method atau fungsi untuk tampil data
    public function tampilkanDosen(){
        return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah";
    }
    
  <p>public function tampilkanDosen(): Metode ini untuk mendefinisikan tampilDosen yang dapat diakses secara publik dan tidak mnerima parameter. <br>
   return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah"; : Bagian ini mengembalikan string yang berisi data dari property $nama, $nip, $mataKuliah dari objek
  </p>

     //instansiasi objek
    $dosen = new Dosen("depii", "1234", "pweb2");

 <p>Object : $dosen adalah objek yang merupakan instansiasi dari kelas dosen.</p>
  <p>Pada objek yang baru dibuat yaitu $dosen memberikan nilai atau value pada setiap property yang ada pada kelas dosen</p>
  
     //menampilkan hasil atau output
     echo $dosen->tampilkanDosen(); //output: Nama: depii, NIP: 1234, mata kuliah: pweb2

 <p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

 <p>Berikut full kodenya</p>

     <?php
     //definisi class
     class Dosen {
      /*atribut atau properties untuk menyimpan
       data atau keadaan dari objek*/
      public $nama;
      public $nip; //aksesbilitas PUBLIC dapat diakses dari mana saja
      public $mataKuliah;
   
       //constructor untuk menginisialisasi atribut atau property
      public function __construct($nama, $nip, $mataKuliah){
          $this->nama = $nama;
          $this->nip = $nip;
          $this->mataKuliah = $mataKuliah;
      }
  
      //method atau fungsi untuk tampil data
      public function tampilkanDosen(){
          return "Nama: $this->nama, NIP: $this->nip, mata kuliah: $this->mataKuliah";
      }
    }
    //instansiasi objek
    $dosen = new Dosen("depii", "1234", "pweb2");
    //menampilkan hasil atau output
    echo $dosen->tampilkanDosen(); //output: Nama: depii, NIP: 1234, mata kuliah: pweb2
    ?>

  <p>Berikut Output hasilnya</p>

![Screenshot (688)](https://github.com/user-attachments/assets/6195b261-52e1-4472-98ea-6c2e591929f3)

   ----------------------------------------
  # Modul 2
  <h4>1. Membuat class dan object</h4>
  <p>Definisi class</p>

    //definisi class
    class Mahasiswa {
    /*atribut atau properties untuk menyimpan
     data atau keadaan dari objek*/
    public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $nim; //aksesbilitas PUBLIC dapat diakses dari mana saja
    public $jurusan; //aksesbilitas PUBLIC dapat diakses dari mana saja
    
<p>Dalam class mahasiswa diatas mempunyai tiga property yaitu $nama, $nim, dan $jurusan.</p>

    //construct untuk menginisialisasi atribut atau preoperty nama, nim, 
    jurusan
      public function __construct($nama, $nim, $jurusan){
          $this->nama = $nama;
          $this->nim = $nim;
          $this->jurusan = $jurusan;
      }

  <p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class Mahasiswa diinstansiasi(dibuat sebuah object).<br>
Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nim, jurusan dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class mahasiswa, yaitu property nama, nim, jurusan.</p>

    //metode atau function tampilData
    public function tampilData(){
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }

 <p>public function tampilkanData(): Metode ini untuk mendefinisikan tampilData yang dapat diakses secara publik dan tidak menerima parameter. <br>
   return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan"; : Bagian ini mengembalikan string yang berisi data dari property $nama, $nim, $jurusan dari objek
  </p>

     //instansiasi objek
     $mahasiswa1 = new Mahasiswa("Devi Aryani", "230102057", "komputer dan bisnis");

 <p><p>Object : $mahasiswa1 adalah objek yang merupakan instansiasi dari kelas mahasiswa.</p>
  <p>Pada objek yang baru dibuat yaitu $mahasiswa1 memberikan nilai atau value pada setiap property yang ada pada kelas mahasiswa</p>
  
    //menampilkan informasi tentang objek 
     echo $mahasiswa1->tampilData(); //output : Nama: Devi Aryani, NIM:  
     230102057, Jurusan: komputer dan bisnis

 <p>Kode ini untuk menampilkan data yang ada atau data yang sudah diberikan pada objek diatas.</p>

 <p>Berikut full kodenya</p>

     <?php
    //definisi class
     class Mahasiswa {
         /*atribut atau properties untuk menyimpan
          data atau keadaan dari objek*/
         public $nama; //aksesbilitas PUBLIC dapat diakses dari mana saja
         public $nim; //aksesbilitas PUBLIC dapat diakses dari mana saja
         public $jurusan; //aksesbilitas PUBLIC dapat diakses dari mana saja

    //construct untuk menginisialisasi atribut atau preoperty nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //metode atau function tampilData
    public function tampilData(){
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
    }
    //instansiasi objek
     $mahasiswa1 = new Mahasiswa("Devi Aryani", "230102057", "komputer dan 
     bisnis");
     //menampilkan informasi tentang objek 
     echo $mahasiswa1->tampilData(); //output : Nama: Devi Aryani, NIM: 
     230102057, Jurusan: komputer dan bisnis
    ?>

   
 <p>Berikut Output hasilnya</p>

![Screenshot (689)](https://github.com/user-attachments/assets/7c6adf11-254f-4054-97a9-1a65583283f7)

 -----------------------------------------
<h4>2. Encaplusation</h4>
<p>Definisi class</p>

         //definisi class 
         class Mahasiswa {
              private $nama; //Private hanya dapat diakses dalam kelas itu sendiri.
              private $nim; //Private hanya dapat diakses dalam kelas itu sendiri.
              private $jurusan; //Private hanya dapat diakses dalam kelas itu sendiri.
           } 

<p>Dalam class Mahasiswa memiliki tiga property yaitu $nama, $nim, $jurusan yang mempunyai visibility private. Visibility private yaitu hanya dapat diakses dalam kelas itu sendiri, jadi yang dapat mengakses property diatas hanya class mahasiswa itu sendiri. Metode ini disebut Encapsulation yang menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu. </p>

        //constructor untuk menginisialisasi atribut
        public function __construct($nama, $nim, $jurusan){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

 <p>Metode Constructor digunakan untuk menginisialisasi property. Metode ini otomatis akan dijalankan saat class Mahasiswa diinstansiasi(dibuat sebuah object).<br>
Di Metode construct dalam class mahasiswa kita menset tiga parameter yaitu nama, nim, jurusan dimana pada metode construct kita menjadikan nilai yang diberikan di parameter menjadi nilai di propety class mahasiswa, yaitu property nama, nim, jurusan.</p>

       //metode getter untuk nama
    public function getNama(){
        return $this->nama;
    }

    //metode getter untuk nim
    public function getNim(){
        return $this->nim;
    }

    //metode getter untuk jurusan
    public function getJurusan(){
        return $this->jurusan;
    }

 <p>Metode Getter digunakan untuk mengembalikan nilai atau mengambil nilai dari property nama, nim, dan jurusan dan hanya bisa diakses pada kelas itu sendiri. </p>

    //metode setter untuk nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    //metode setter untuk nim
    public function setNim($nim){
        $this->nim = $nim;
    }

    //metode setter untuk jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

 <p>Metode Setter digunakan untuk menetapkan nilai property dari sebuah objek. Fungsi setter adalah metode publik yang memungkinkan kita untuk mengontrol bagaimana nilai properti objek diubah. Fungsi setter sering digunakan bersama dengan fungsi getter, yang digunakan untuk mengambil nilai dari properti objek. </p>

        //instansiasi objek dari class mahasiswa
       $mahasiswa1 = new Mahasiswa ("Devi Aryani", "230102057", "komputer dan bisnis");

 <p>Object : $dosen adalah objek yang merupakan instansiasi dari kelas dosen.</p>
  <p>Pada objek yang baru dibuat yaitu $dosen memberikan nilai atau value pada setiap property yang ada pada kelas dosen</p>

        //mengakses property menggunakan getter
      echo $mahasiswa1->getNama() . "<br>";
      echo $mahasiswa1->getNim() . "<br>";
      echo $mahasiswa1->getJurusan() . "<br>";

 <p>Metode Getter (getNama, getNim, getJurusan) akan mengubah nilai property dari objek</p>

       // Mengubah data mahasiswa dengan metode setter.
          $mahasiswa1->setNama("darren"); // Mengganti nama mahasiswa.
          $mahasiswa1->setNim("34567"); // Mengganti NIM mahasiswa.
          $mahasiswa1->setJurusan("Teknik Informatika"); // Mengganti jurusan mahasiswa.

 <p>Metode Setter (setNama, setNim, setJurusan) akan mengubah nilai property dari objek</p>
       
       //mengakses property menggunakan getter
       echo $mahasiswa1->getNama() . "<br>";
       echo $mahasiswa1->getNim() . "<br>";
       echo $mahasiswa1->getJurusan() . "<br>";

   <p>Metode Getter (getNama, getNim, getJurusan) akan mengambil dan menampilkan data yang telah diubah menggunakan metode setter. </p>
   
   <p>Berikut full kodenya</p>

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

 <p>Berikut Output Hasilnya</p>

![Screenshot (690)](https://github.com/user-attachments/assets/9cb1f374-58d3-40fe-a09c-4c5ed948c9b6)
    
-----------------------------------------------------------------
<h4>3. Inheritance</h4>
<p>Definisi class Pengguna</p>

        //definisi class 
        class Pengguna {
            //property nama
            protected $nama; // Dapat diakses oleh kelas itu sendiri dan kelas turunan.

<p>Class Pengguna disini sebagai parent class. Didalam class Pengguna memiliki property nama yang menggunakan visibility protected, artinya property nama ini hanya dapat diakses oleh class Pengguna dan class turunannya dan tidak dapat diakses dari luar kelas. </p>
   
      //construct untuk menginisialisasi property
      public function __construct($nama){
          $this->nama = $nama;
      }

 <p>Constructor untuk menginisialisasi property nama dengan nilai saat objek dibuat. </p>

       //method untuk mendapatkan nilai property nama 
       public function getNama(){
           return $this->nama;
       }

<p>Metode ini mengembalikan nilai property nama</p>

     //class Dosen yang mewarisi dari class Pengguna
     class Dosen extends Pengguna {
         private $mataKuliah; //property matakuliah yang private

<p>Class Dosen disini sebagai child class karena class ini mewarisi class Pengguna yang berarti class Dosen memiliki semua property dan metode dari class pengguna. </p>

      //construct untuk menginisialisasi property nama dan matakuliah
      public function __construct($nama, $mataKuliah){
          //menginisialisasi property nama dari class Pengguna
          parent::__construct($nama);
          $this->mataKuliah = $mataKuliah;
      }

<p> Construktor untuk class Dosen menginisialisasi nama dan mataKuliah. Construktor ini pertama-tama memanggil Construktor parent (class Pengguna) dengan menggunakan parent::__construct($nama) untuk menginisialisasi properti nama. Kemudian menginisialisasi properti mataKuliah.</p>

       //Metode untuk mendapatkan mata kuliah
       public function getMataKuliah(){
           return $this->mataKuliah;
       } 
       
  <p>Metode ini mengembalikan nilai dari property mataKuliah</p>

       //instansiasi objek class Dosen
         $dosen1 = new Dosen("Devi Aryani", "P Web 2");

 <p>Membuat instansiasi objek baru dari class Dosen dengan nama "Devi Aryani" dan mata kuliah "P Web 2". </p>
 
       //mengakses property nama dan matakuliah
         echo $dosen1->getNama() . "<br>"; //Menampilkan Output : Devi Aryani

  <p>Memanggil metode getNama() dari objek $dosen1 untuk mendapatkan dan menampilkan nilai properti nama, yang akan menghasilkan output "Devi Aryani". </p>
  
        echo $dosen1->getMataKuliah(); //Menampilkan Output : P Web 2

 <p>Memanggil metode getNama() dari objek $dosen1 untuk mendapatkan dan menampilkan nilai properti mataKuliah, yang akan menghasilkan output "P Web 2".</p>
 <p>Berikut Full Kodenya</p>
  
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

 <p>Berikut Outputnya</p>
 
![Screenshot (691)](https://github.com/user-attachments/assets/7f9d6118-bf7c-43f4-8544-b9200b0d62b5)

 -------------------------------------------------------------
 <h4>4. Polymorphism</h4>
 <p>Definisi class Pengguna</p>

     //definisi class Pengguna
     class Pengguna {
         protected $nama; //property protected untuk nama

 <p>Mendefinisikan sebuah class bernama Pengguna.
 Properti nama dengan visibilitas protected yang berarti properti ini hanya dapat diakses dari dalam class itu sendiri atau dari class turunannya (Dosen dan Mahasiswa).</p>

    //constructor untuk menginisialisasi nama
    public function __construct($nama){
        $this->nama = $nama;
    }

 <p>Construktor yang menginisialisasi properti $nama</p>

    //metode aksesFitur 
    public function aksesFitur(){
        return $this->nama;
    }

 <p>Metode ini mengembalikan nilai properti $nama.</p>

     //class Dosen yang mewarisi class Pengguna
     class Dosen extends Pengguna {
         private $matkul; //property matkul yang private

 <p>Class Dosen mewarisi (extends) dari class Pengguna sehingga class Dosen memiliki semua properti dan metode dari Pengguna.
private $matkul mendeklarasikan properti $matkul dengan visibilitas private hanya dapat diakses dari dalam class Dosen itu sendiri.</p>

     //constructor untuk menginisialisasi matkul dan nama
     public function __construct ($nama, $matkul){
         $this->nama = $nama;
         $this->matkul = $matkul;
     }

 <p>Construktor ini menginisialisasi properti $nama (class Pengguna) dan $matkul (class Dosen).</p> 

        //implementasi metode aksesFitur
      public function aksesFitur(){
          return "Dosen $this->nama mengajar $this->matkul";
      }

 <p>Metode ini mengoverride (menggantikan) metode aksesFitur dari class Pengguna. Metode ini mengembalikan string yang menyatakan bahwa dosen dengan nama tertentu mengajar mata kuliah tertentu.</p>

      //class Mahasiswa yang mewarisi class Pengguna
      class Mahasiswa extends Pengguna {
          private $studentID; //property studentID yang private

  <p>Class Mahasiswa mewarisi class Pengguna, sehingga Mahasiswa memiliki semua properti dan metode dari Pengguna. private $studentID mendeklarasikan properti $studentID dengan visibilitas private.</p>
  
          //constructor untuk menginisialisasi studentID dan nama
          public function __construct ($nama, $studentID){
              $this->nama = $nama;
              $this->studentID = $studentID;
          }
          
   <p>Construktor ini menginisialisasi properti $nama (class Pengguna) dan $studentID (class Mahasiswa).</p>   
   
          //implementasi metode aksesFitur
          public function aksesFitur(){
              return "Nama $this->nama dengan ID $this->studentID ";
          }
      }

<p>Metode ini mengoverride metode aksesFitur dari class Pengguna. Metode ini mengembalikan string yang menyatakan nama mahasiswa dan ID mahasiswa.</p>
      
      // instansi objek dari class dosen dan mahasiswa
         $dosen = new Dosen("renata", "matdis");
         $mahasiswa = new Mahasiswa("vava", "111");

<p>$dosen = new Dosen("renata", "matdis"): Membuat instance (objek) baru dari class Dosen dengan nama "renata" dan mata kuliah "matdis".<br>
$mahasiswa = new Mahasiswa("vava", "111"): Membuat instance (objek) baru dari class Mahasiswa dengan nama "vava" dan ID "111".</p>
      
      //pemanggilan metode aksesFitur
      echo $dosen->aksesFitur() . "<br>"; //Menampilkan Output dosen
<p>Memanggil metode aksesFitur() dari objek $dosen dan menampilkan hasil "Dosen renata mengajar matdis"</p>
      
      echo $mahasiswa->aksesFitur(); //menampilkan output mahasiswa
      ?>

<p>Memanggil metode aksesFitur() dari objek $mahasiswa dan menampilkan hasil "Nama vava dengan ID 111 "</p>

<p>Berikut Full Kodenya</p>

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

 <p>Berikut Outputnya</p>

![Screenshot (692)](https://github.com/user-attachments/assets/4a24ca78-428a-483c-abb8-62b4d09f76b2)

---------------------------------------------------------------
<h4>5. Abstraction</h4>
<p>Definisi class Pengguna</p>

     //class abstrak
     abstract class Pengguna {
         //metode yang tidak memiliki implementasi dalam kelas abstrak dan harus di implementasikan dalam kelas turunannya
         abstract public function aksesFitur();
     }

<p>Mendefinisikan sebuah class abstrak bernama Pengguna. Class abstrak tidak dapat diinstansiasi secara langsung dan biasanya digunakan sebagai blueprint untuk class lain.</p>
<p>Metode abstrak aksesFitur() dideklarasikan di sini. Metode ini tidak memiliki implementasi dalam class Pengguna dan harus diimplementasikan dalam setiap class yang mewarisi Pengguna.</p>
    
        //class dosen yang mewarisi dari class Pengguna
        class Dosen extends Pengguna {
            
            //implementasi metode  abstrak aksesFitur yang didefinisikan dalam kelas pengguna
            public function aksesFitur(){
                return "Fitur Masukan Nilai";
            }
        }

<p>Class Dosen mewarisi class Pengguna. Karena class Pengguna adalah class abstrak maka class Dosen harus mengimplementasikan semua metode abstrak yang didefinisikan dalam Pengguna.</p>
<p>public function aksesFitur() merupakan implementasi dari metode aksesFitur() yang didefinisikan dalam class abstrak Pengguna. Dalam class Dosen metode ini mengembalikan "Fitur Masukan Nilai".</p>

       //class Mahasiswa yang mewarisi dari class Pengguna
       class Mahasiswa extends Pengguna {
          
           //implementasi metode  abstrak aksesFitur yang didefinisikan dalam kelas pengguna
           public function aksesFitur(){
               return "Fitur lihat nilai";
           }
       }

 <p>Class Mahasiswa juga mewarisi class Pengguna dan karena itu harus mengimplementasikan metode abstrak aksesFitur().</p>
<p>public function aksesFitur() merupakan implementasi dari metode aksesFitur() yang didefinisikan dalam class abstrak Pengguna. Dalam class Mahasiswa metode ini mengembalikan "Fitur lihat nilai".</p>

        // instansi objek dari class dosen 
        $dosen = new Dosen();
<p>Membuat instance (objek) baru dari class Dosen.</p>
        
        //menampilkan output dari metode aksesFitur
        echo $dosen->aksesFitur() . "<br>";

<p>Memanggil metode aksesFitur() dari objek $dosen dan menampilkan hasilnya.</p>
        
        //instansiasi objek dari class mahasiswa
        $mahasiswa = new Mahasiswa();

<p>Membuat instance (objek) baru dari class Mahasiswa.</p>
        
        //menampilkan output dari metode aksesFitur
        echo $mahasiswa->aksesFitur();

<p>Memanggil metode aksesFitur() dari objek $mahasiswa dan menampilkan hasilnya.</p>
<p>Berikut Full Kodenya</p>

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

<p>Berikut Outputnya</p>

![Screenshot (693)](https://github.com/user-attachments/assets/9000d270-9a25-49e7-8413-194fbb2dd4ce)

---------------------------------------------------------------------------
# Modul 3
# Jobsheet 3
<h4>1. Inheritance</h4>
<p>Definisi Class </p>

      //class parent
      class Person {
          //property name 
          protected $name; //protected agar bisa diakses oleh kelas turunan
          
<p>Class Person disini sebagai parent class. Didalam class Person  memiliki property nama yang menggunakan visibility protected, artinya property nama ini hanya dapat diakses oleh class Person dan class turunannya dan tidak dapat diakses dari luar kelas</p>
          
          //construct untuk menginisialisasi property name
          public function __construct($name){
              $this->name = $name;
          }

<p>Construktor ini akan dipanggil ketika objek dari class Person atau class turunan dibuat.</p>
      
          //metode untuk mendapatkan name
          public function getName(){
              return $this->name;
          }

<p>Metode ini mengembalikan nilai dari properti $name</p>

      //class student yang mewarisi dari class person
      class Student extends Person {
          //property tambahan khusus student
          public $studentID;

<p>Class Student mewarisi class Person. Ini berarti Student akan memiliki semua properti dan metode yang didefinisikan di class Person.</p>
<p>public $studentID mendeklarasikan properti $studentID dengan visibilitas public. Properti ini dapat diakses dari mana saja, baik dari dalam maupun luar class.</p>
      
           // Constructor untuk menginisialisasi name dan studentID
          public function __construct($name, $studentID){
              // Memanggil constructor dari kelas induk
              parent::__construct($name);
              $this->studentID = $studentID;
          }

<p>Construktor di class Student menginisialisasi property $name dan $studentID. Di dalam Construktor metode parent::__construct($name) dipanggil untuk menjalankan Construktor dari class Person yang menginisialisasi properti $name. Selanjutnya properti $studentID diinisialisasi.</p>
      
           // Metode untuk mendapatkan studentID
          public function getStudentID(){
              return $this->studentID;
          }

<p>Metode ini mengembalikan nilai dari properti $studentID</p>
      
      //instansisasi objek
        $student = new Student("devi", "113");

<p>Membuat instansiasi objek dari class Student dengan parameter name diinisialisasi sebagai "devi" dan studentID diinisialisasi sebagai "113".</p>
      
      //untuk menampilkan data dari metode getName
      echo "Nama: " . $student->getName() . "<br>";

<p>Memanggil metode getName() dari objek $student untuk mendapatkan nama ("devi"). Hasilnya ditampilkan dengan menambahkan teks "Nama: " di depannya.</p>
      
      //untuk menampilkan data dari metode getStudentID
      echo "ID: " . $student->getStudentID();

<p>Memanggil metode getStudentID() dari objek $student untuk mendapatkan ID mahasiswa ("113"). Hasilnya ditampilkan dengan menambahkan teks "ID: " di depannya.</p>
<p>Berikut Full Kodenya</p>

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
       
<p>Berikut Outputnya</p>

![Screenshot (694)](https://github.com/user-attachments/assets/40554a09-4c20-4a64-ae0f-fbc000a1babe)

----------------------------------------------------
<p>2. Polymorphism </p>
<p>Definisi Class</p>

      //definisi class person
        class Person {
            protected $name; //property name yang protected

<p>Class Person disini sebagai parent class. Didalam class Person  memiliki property nama yang menggunakan visibility protected, artinya property nama ini hanya dapat diakses oleh class Person dan class turunannya dan tidak dapat diakses dari luar kelas</p>

        //untuk menginisialisasi name
    public function __construct($name){
        $this->name = $name;
    }

<p>Construktor ini akan dipanggil ketika objek dari class Person atau class turunan dibuat</p>

      //metode untuk mendapatkan name
    public function getName(){
        return $this->name;
    }

<p>Metode ini mengembalikan nilai dari properti $name.</p>

       //class teacher yang mewarisi dari person
       class Teacher extends Person {
           public $teacherID; //property teacherID

<p>Class Teacher mewarisi semua properti dan metode dari class Person. Ini berarti Teacher dapat menggunakan properti $name dan metode getName() dari Person</p>
<p>Properti baru $teacherID yang khusus untuk class Teacher.</p>
           
           //menginisialisasi property name dan teacherID
           public function __construct ($name, $teacherID){
               parent::__construct($name);
               $this->teacherID = $teacherID;
           }

<p>Construktor di class Teacher menginisialisasi $name dan $teacherID. Di dalamnya memanggil Construktor dari parent class Person menggunakan parent::__construct($name) untuk menginisialisasi properti $name, lalu menginisialisasi properti $teacherID.</p>
       
           // Override metode getName untuk menampilkan format khusus Teacher
           public function getName(){
               return "Teacher: " . $this->name ;
           }

<p>Metode ini meng-override metode getName() dari class Person</p>
                  
           //metode mendapatkan property teacherID
           public function getTeacherID(){
               return $this->teacherID;
           }

<p>Metode ini mengembalikan nilai dari properti $teacherID.</p>
      
       class Student extends Person {
           public $studentID;

<p>Class Student juga mewarisi semua properti dan metode dari class Person </p>
<p>Properti baru $studentID yang khusus untuk class Student.</p>           
       
           public function __construct($name, $studentID){
               parent::__construct($name);
               $this->studentID = $studentID;
           }

<p>Construktor di class Student menginisialisasi $name dan $studentID. Di dalamnya, ia memanggil konstruktor dari parent class Person menggunakan parent::__construct($name) untuk menginisialisasi properti $name, lalu menginisialisasi properti $studentID.</p>
       
           // Override metode getName untuk menampilkan format khusus Student
           public function getName(){
               return "Student: " . $this->name;
           }

<p>Metode ini meng-override metode getName() dari class Person</p>         
       
           //mendapatkan nilai dari property studentID
           public function getStudentID(){
               return $this->studentID;
           }

<p>Metode ini mengembalikan nilai dari properti $studentID.</p>
       
       //instansiasi objek dari class Teacher dan Student
         $teacher = new Teacher("deandra", "133");
         $student = new Student("caca", "221");

<p>Membuat instansiasi objek baru dari class Teacher dengan parameter name diinisialisasi sebagai "deandra" dan teacherID diinisialisasi sebagai "123".</p>
<p>Membuat instance (objek) baru dari class Student dengan parameter name diinisialisasi sebagai "caca" dan studentID diinisialisasi sebagai "221"</p>
              
       //Menampilkan hasil dari metode getName
       echo $teacher->getName() . "<br>"; //output Student: deandra
       echo $student->getName(); //output Student: caca
           
<p>Memanggil metode getName() dari objek $teacher, yang telah di-override</p> 
<p>Memanggil metode getName() dari objek $student, yang telah di-override</p>
<p>Berikut Full Kodenya</p>

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

<p>Berikut Outputnya</p>

![Screenshot (695)](https://github.com/user-attachments/assets/2e0aca36-6651-420b-8f32-dc8e7fb0103b)

---------------------------------------------------------------------------------------------------------------

<h4>3. Encapsulation</h4>
<p>Definisi Class</p>

      <?php
      //definisi class student
      class Student{
          //property private
          private $name;
          private $studentID;

<p> Mendefinisikan sebuah class Student.
private $name dan private $studentID merupakan dua properti yang dideklarasikan sebagai private yang hanya dapat diakses dari dalam class Student itu sendiri. Ini adalah bagian dari prinsip encapsulation </p>
                
          //constructor untuk menginisialisasi nama dan studentID
          public function __construct($name, $studentID){
              $this->name = $name;
              $this->studentID = $studentID;
          }

<p> Construktor ini digunakan untuk menginisialisasi properti $name dan $studentID</p>
      
          //Getter untuk name
          public function getName(){
              return "Nama: " . $this->name;
          }

<p>Metode ini mengembalikan nilai dari properti $name</p>
      
          //Getter untuk studentID
          public function getStudentID(){
              return "ID: " . $this->studentID;
          }

<p>Metode ini mengembalikan nilai dari properti $studentID</p>
      
          //Setter untuk name
          public function setName($name){
              $this->name = $name;
          }

<p>Metode ini memungkinkan pengubahan nilai properti $name dari luar class</p>
      
          //Setter untuk StudentID
          public function setStudentID($studentID){
              $this->studentID = $studentID;
          }

<p>Metode ini memungkinkan pengubahan nilai properti $studentID dari luar class</p>
     
      //instansiasi objek dari class student
        $student = new Student("lala", "345");

<p>Membuat instansiasi objek baru dari class Student dengan nama "lala" dan ID "345</p>
          
      // Mengakses data melalui metode getter
      echo $student->getName() . "<br>";
      echo $student->getStudentID() . "<br>";

<p>Memanggil metode getName() untuk mengakses dan menampilkan nama student, yang akan menghasilkan output "Nama: lala". </p>
<p>Memanggil metode getStudentID() untuk mengakses dan menampilkan ID student, yang akan menghasilkan output "ID: 345".</p>
            
      // Mengubah data melalui metode setter
      $student->setName("rara");
      $student->setStudentID("321");

<p>$student->setName("rara") mengubah nilai properti $name dari "tutu" menjadi "rara" menggunakan metode setName().</p>
<p>$student->setStudentID("321") mengubah nilai properti $studentID dari "345" menjadi "321" menggunakan metode setStudentID()</p>
      
      // Menampilkan data yang sudah diubah
      echo $student->getName() . "<br>";
      echo $student->getStudentID();

<p>echo $student->getName() memanggil kembali metode getName() untuk menampilkan nama student yang telah diubah menjadi "rara". Hasilnya akan menampilkan "Nama: rara".</p>
<p>echo $student->getStudentID() memanggil kembali metode getStudentID() untuk menampilkan ID student yang telah diubah menjadi "321". Hasilnya akan menampilkan "ID: 321".</p>
   
<p>Berikut Full Kodenya</p>

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

<p>Berikut Outputnya</p>

![Screenshot (696)](https://github.com/user-attachments/assets/c53a2cca-134c-4347-a77d-fe3e49beb9e8)

--------------------------------------------------------
<h4>4. Abstraction</h4>
<p>Definisi class</p>

       <?php
       //class abstrak
       abstract class Course {
           //metode yang tidak memiliki implementasi dalam kelas abstrak dan harus di implementasikan dalam kelas turunannya
           abstract public function getCourseDetails();
       }

<p>Abstract class Course: Ini adalah class abstrak bernama Course. Class abstrak tidak dapat diinstansiasi secara langsung dan biasanya digunakan sebagai dasar bagi class lain untuk diturunkan.</p><br>
<p>Metode getCourseDetails() adalah metode abstrak, yang artinya tidak memiliki implementasi dalam class Course. Metode ini harus diimplementasikan dalam class turunan.</p>
       
       //class onlinecourse yang mewarisi class course
       class OnlineCourse extends Course{
           //property class onlinecourse yang private
           private $pengajar;
           private $matkul;

<p>OnlineCourse adalah class yang mewarisi class Course. OnlineCourse harus mengimplementasikan metode abstrak getCourseDetails() dari class Course.</p><br>
<p>Dua properti private dideklarasikan, yaitu $pengajar dan $matkul. Properti ini hanya dapat diakses dari dalam class OnlineCourse.</p>
       
           //construct yang menginisialisasi property pengajar dan matkul
           public function __construct($pengajar, $matkul){
               $this->pengajar = $pengajar;
               $this->matkul = $matkul;
           }

<p>Construktor ini digunakan untuk menginisialisasi properti $pengajar dan $matkul saat objek OnlineCourse dibuat.</p>
       
           //implementasi metode getCourseDetails() dari class abstrak course
           public function getCourseDetails() {
               return "Online Course dengan pengajar: $this->pengajar dan matkul $this->matkul.";
           }

<p>Implementasi metode abstrak getCourseDetails(). Metode ini mengembalikan string yang menjelaskan detail kursus online dengan menyebutkan pengajar dan mata kuliahnya.</p>
      
       //class offlinecourse yang mewarisi class course
       class OfflineCourse extends Course {
           //property class offlinecourse yang private
           private $tempat;
           private $hari;

<p>OfflineCourse adalah class yang juga mewarisi class Course. Seperti OnlineCourse, class ini juga harus mengimplementasikan metode getCourseDetails().</p><br>
<p>Dua properti private dideklarasikan, yaitu $tempat dan $hari. Properti ini hanya dapat diakses dari dalam class OfflineCourse.</p>
       
            //construct yang menginisialisasi property pengajar dan matkul
           public function __construct($tempat, $hari){
               $this->tempat = $tempat;
               $this->hari = $hari;
           }

<p>Konstruktor ini digunakan untuk menginisialisasi properti $tempat dan $hari saat objek OfflineCourse dibuat.</p>
       
           //implementasi metode getCourseDetails() dari class abstrak course
           public function getCourseDetails() {
               return "Online Course dengan tempat: $this->tempat dan hari $this->hari.";
           }

<p>Implementasi metode abstrak getCourseDetails(). Metode ini mengembalikan string yang menjelaskan detail kursus offline dengan menyebutkan tempat dan harinya.</p>
       
       //instansiasi objek dari class Onlinecourse
       $online = new OnlineCourse("sarah", "pweb");

<p>Membuat instansiasi objek baru dari class OnlineCourse dengan pengajar "sarah" dan mata kuliah "pweb".</p>
       
       //instansiasi objek dari class Offlinecourse
       $offline = new OfflineCourse("kampus", "rabu");
       //pemanggilan metode getCourseDetails() dari objek online dan offline

<p>Membuat instansiasi objek baru dari class OfflineCourse dengan tempat "kampus" dan hari "rabu".</p>
       
       echo $online->getCourseDetails() . "<br>";
       echo $offline->getCourseDetails();
       ?>

<p>echo $online->getCourseDetails() . "<br>" untuk memanggil metode getCourseDetails() dari objek OnlineCourse untuk menampilkan detail kursus online. Ini akan menghasilkan output "Online Course dengan pengajar: sarah dan matkul pweb." <br>
echo $offline->getCourseDetails(): Memanggil metode getCourseDetails() dari objek OfflineCourse untuk menampilkan detail kursus offline. Ini akan menghasilkan output "Offline Course dengan tempat: kampus dan hari rabu"</p>
 
<p>Berikut Full Kodenya</p>

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

<p>Berikut Outputnya</p>

![Screenshot (697)](https://github.com/user-attachments/assets/710d681a-0a65-4025-9b4b-fb422ded927a)

-------------------------------------------------------------
<h4>Tugas 3</h4>
<p>Definisi Class</p>

        <?php
        //class parent
        class Person {
            protected $name; // Dapat diakses oleh kelas itu sendiri dan kelas turunan.

<p>class Person adalah parent class yang memiliki property name bersifat protected jadi dapat diakses dalam class Person dan class yang mewarisi Person.</p>            
                 
            //construct untuk menginisialisasi property name
            public function __construct($name){
                $this->name = $name;
            }

<p>Construktor ini menginisialisasi properti name saat objek dibuat.</p>
            
            //method untuk mendapatkan name 
            public function getName(){
                return $this->name;
            }

<p>Metode ini mengembalikan nilai name.</p>
        
            //metode getRole
            public function getRole(){
                return "Data lengkap";
            }

<p>Metode ini mengembalikan string "Data lengkap". Ini adalah metode umum yang dapat di-override oleh class turunan.
</p>
        
        //class dosen yang mewarisi dari person
        class Dosen extends Person {
            private $nidn; //property nidn yang private

<p>class Dosen extends Person adalah class yang mewarisi class Person. Ini berarti Dosen memiliki akses ke semua properti dan metode dari Person.
 Properti nidn bersifat private jadi hanya dapat diakses dalam class Dosen saja.</p>
        
            //inisialisasi property name dan nidn
            public function __construct($name, $nidn){
                parent::__construct($name);
                $this->nidn = $nidn;
            }

<p>Construktor ini menginisialisasi properti name dengan memanggil konstruktor dari class Person menggunakan parent::__construct($name). Selain itu, juga menginisialisasi properti nidn.</p>
        
            //override untuk mengembalikan string dengan format khusus 
            public function getRole(){
                return "Dosen: $this->name, NIDN: $this->nidn ";
            }

<p>Metode ini mengoverride metode getRole() dari class Person untuk memberikan output yang lebih spesifik,</p>
        
            // Metode untuk mendapatkan nidn
            public function getNidn(){
                return $this->nidn;
            }

<p>Metode ini mengembalikan nilai dari nidn.</p>
       
        //class mahasiswa yang mewarisi dari person
        class Mahasiswa extends Person {
            //property nim yang private
            private $nim;

<p>class Mahasiswa extends Person adalah class yang juga mewarisi dari Person. Properti nim bersifat private, jadi hanya dapat diakses dalam class Mahasiswa.</p>
        
            //inisialisasi property name dan nim
            public function __construct($name, $nim){
                parent::__construct($name);
                $this->nim = $nim;
            }

<p>Construktor ini menginisialisasi properti name dengan memanggil Construktor dari class Person menggunakan parent::__construct($name). Selain itu, ia juga menginisialisasi properti nim.</p>
        
            //override untuk mengembalikan string dengan format khusus 
            public function getRole(){
                return "Mahasiswa: $this->name, NIM: $this->nim";
            }

<p>Metode ini mengoverride metode getRole() dari class Person untuk memberikan output spesifik</p>
        
            // Metode untuk mendapatkan nim
            public function getNim(){
                return $this->nim;
            }

<p>Metode ini mengembalikan nilai dari nim.</p>
      
        //class abstrak Jurnal
        abstract class jurnal {
            /*metode yang tidak memiliki implementasi dalam kelas 
            abstrak dan harus di implementasikan dalam kelas turunannya*/
            abstract public function getJurnal();
        }

<p>abstract class jurnal adalah class abstrak yang berarti tidak bisa diinstansiasi dan biasanya digunakan sebagai dasar bagi class lain.
abstract public function getJurnal() harus diimplementasikan oleh setiap class yang mewarisi Jurnal.</p>
        
        //class jurnaldosen yang mewarisi dari jurnal
        class JurnalDosen extends jurnal{
            //property dosen
            private $dosen;

<p>class JurnalDosen extends jurnal adalah class yang mewarisi Jurnal.
 Properti dosen bersifat private yang hanya dapat diakses oleh class jurnal dan class turunannya.</p>           
        
            //inisialisasi property dosen
            public function __construct($dosen){
                $this->dosen = $dosen;
            }

<p>onstruktor ini menginisialisasi properti dosen.</p>
        
            //implementasi metode getJurnal() dari class abstrak Jurnal
            public function getJurnal() {
                return "Jurnal Dosen: $this->dosen .";
            }

<p>Metode ini mengimplementasikan metode getJurnal() dari class Jurnal, mengembalikan string yang menunjukkan jurnal dosen.</p>
        
        //class JurnalMahasiswa yang mewarisi class Jurnal
        class JurnalMahasiswa extends jurnal {
            //property mahasiswa
            private $mahasiswa;

<p>class JurnalMahasiswa extends jurnal adalah class yang mewarisi Jurnal.
 Properti dosen bersifat private yang hanya dapat diakses oleh class jurnal dan class turunannya.</p>   
                  
            //inisialisasi property mahasiswa
            public function __construct($mahasiswa){
                $this->mahasiswa = $mahasiswa;
            }

<p>Construktor ini menginisialisasi properti mahasiswa.</p>
        
            //implementasi metode getJurnal() dari class abstrak Jurnal
            public function getJurnal() {
                return "Jurnal mahasiswa: $this->mahasiswa .";
            }

<p>Metode ini mengimplementasikan metode getJurnal() dari class Jurnal, mengembalikan string yang menunjukkan jurnal mahasiswa.</p>
        
        //instansiasi objek
         $dosen1 = new Dosen("Devi Aryani", "234");
         $mahasiswa = new Mahasiswa("karrel", "2402001");

<p>Membuat objek Dosen dengan nama "Devi Aryani" dan NIDN "234".</p><br><p>Membuat objek Mahasiswa dengan nama "karrel" dan NIM "2402001".</p>
        
        $dosen = new JurnalDosen("Program PHP" );
        $mahasiswa1 = new JurnalMahasiswa("Basis Data");

<p>$dosen = new JurnalDosen("Program PHP"); Membuat objek JurnalDosen dengan dosen "Program PHP".
$mahasiswa1 = new JurnalMahasiswa("Basis Data"); Membuat objek JurnalMahasiswa dengan mahasiswa "Basis Data".</p>
               
        //pemanggilan method untuk dosen
        echo "Dosen:" . $dosen1->getName() . "<br>";
        echo "NIDN: " . $dosen1->getNidn() . "<br>";
        echo "Data: " . $dosen1->getRole() . "<br>";
        echo $dosen->getJurnal() . "<br>"."<br>";

<p>echo "Dosen:" . $dosen1->getName() . "<br>"; Menampilkan nama dosen.
echo "NIDN: " . $dosen1->getNidn() . "<br>"; Menampilkan NIDN dosen.
echo "Data: " . $dosen1->getRole() . "<br>"; Menampilkan data dosen dengan format yang dioverride di Dosen.
echo $dosen->getJurnal() . "<br>"."<br>"; Menampilkan detail jurnal dosen.</p>
        
        //pemanggilan method untuk mahasiswa
        echo "Mahasiswa: " . $mahasiswa->getName() . "<br>";
        echo "NIM: " . $mahasiswa->getNim() . "<br>";
        echo "Data: " . $mahasiswa->getRole() . "<br>";
        echo $mahasiswa1->getJurnal() . "<br>";
        ?>

<p>echo "Mahasiswa: " . $mahasiswa->getName() . "<br>"; Menampilkan nama mahasiswa.
echo "NIM: " . $mahasiswa->getNim() . "<br>"; Menampilkan NIM mahasiswa.
echo "Data: " . $mahasiswa->getRole() . "<br>"; Menampilkan data mahasiswa dengan format yang dioverride di Mahasiswa.
echo $mahasiswa1->getJurnal() . "<br>"; Menampilkan detail jurnal mahasiswa.</p>
 
<p>Berikut Full Kodenya</p>

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

<p>Berikut Outputnya</p>

![Screenshot (698)](https://github.com/user-attachments/assets/d7645bcb-d2a8-4909-acf6-0bd4674160c5)
