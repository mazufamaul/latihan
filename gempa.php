<?php

class Gempa{
    private $lokasi;
    private $skala;

    //constrctor utk menghantarkan variabel
    public function __construct ($lokasi, $skala){
        $this->lokasi =$lokasi;
        $this->skala = $skala;
    }

    private function dampak($skala){
        $this->skala = $skala;
        if($skala >=0 && $skala <=2)
        $dampak = 'tidak terasa';

        else if ($skala > 2 && $skala <=4)
        $dampak = 'bangunan retak retak';

        else if($skala > 4 && $skala <=6)
        $dampak = 'bangunan roboh';

        else $dampak = 'berpotensi tsunami';
        return $dampak;
    }
    public function cetak(){
        echo 'Lokasi : '.$this->lokasi;
        echo '<br> Skala : '.$this->skala;
        echo '<br> Dampak : '.$this->dampak($this->skala);
        echo '<br>';
    }
}

?>