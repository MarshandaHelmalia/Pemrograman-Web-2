<?php

class Manusia {
    public $nama;
    public $umur;
    
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getInfo() {
        return "Nama : " . $this->nama . ", Umur : " . $this->umur;
    }
}

class Buah {

}

class Kendaraan {

}
// membuat objek
$ahmad = new Manusia();
$ahmad->setNama("Ahmad"); //"Ahmad" yang ada di dalam kurung merupakan parameter 
$ahmad->setUmur(25);

$chacha = new Manusia();
$chacha->setNama("Marshanda Helmalia"); 
$chacha->setUmur(20);

$semangka = new Buah();

echo $ahmad->getInfo();

echo "<br>";

echo $chacha->getInfo();
?>