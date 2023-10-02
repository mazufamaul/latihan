<?php
require_once "Bentuk2D.php";

class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;
    private $sisi1;
    private $sisi2;
    private $sisi3;

    public function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
        $this->sisi3 = $sisi3;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
}
?>
