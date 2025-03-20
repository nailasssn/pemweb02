<?php
 /**
  * Kelas Lingkaran
  * Kelas Untuk menghitung luas dan keliling lingkaran
  */
  class Lingkaran {
    public $jari;
    public const PHI = 3.14;

    public function _construct($jari){
        $this ->jari = $jari;
    }
    public function getluas(){
        $luas = self ::PHI * $this->jari * $this-> jari;
        return $luas;
    }
    public function getkeliling(){
        $keliling = 2.0 * self ::PHI * $this->jari ;
        return $keliling;
    }
    public function cetak(){
        echo "Jari-jari lingkaran " .$this->jari;
        echo "<br>Luas lingkaran : " . $this->getluas();
        echo "<br>Keliling lingkaran : " . $this->getkeliling();

    }
}
?>