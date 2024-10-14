<?php
class Jurnal{
    protected $tanggal;
    protected $jumalahmhs;
    public $kegiatan;

    public function mengisiJurnal(){
        echo "Jurnal :" .$this->kegiatan  ;
    }
}

$jurnal = new Jurnal();
$jurnal->kegiatan = "chelsea";
echo $jurnal->mengisiJurnal();
?>