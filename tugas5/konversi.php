


<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            return ($this->besaranSuhu * 9/5) + 32;
        }
        return null;
    }

    public function FahrenheitToCelcius() {
        if ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            return ($this->besaranSuhu - 32) * 5/9;
        }
        return null;
    }

    public function CelciusToRheamur() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            return $this->besaranSuhu * 4/5;
        }
        return null;
    }

    public function RheamurToCelcius() {
        if ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            return $this->besaranSuhu * 5/4;
        }
        return null;
    }

    public function cetak() {
        $hasilKonversi = null;

        switch ($this->satuanSuhuAwal) {
            case "Celcius":
                switch ($this->satuanSuhuTujuan) {
                    case "Fahrenheit":
                        $hasilKonversi = $this->CelciusToFahrenheit();
                        break;
                    case "Rheamur":
                        $hasilKonversi = $this->CelciusToRheamur();
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($this->satuanSuhuTujuan) {
                    case "Celcius":
                        $hasilKonversi = $this->FahrenheitToCelcius();
                        break;
                }
                break;
            case "Rheamur":
                switch ($this->satuanSuhuTujuan) {
                    case "Celcius":
                        $hasilKonversi = $this->RheamurToCelcius();
                        break;
                }
                break;
        }

       
        if ($hasilKonversi !== null) {
            echo "<table class='styled-table'>";
            echo "<thead>";
            echo "<tr><th>Satuan Suhu Awal</th><th>Besaran Suhu</th><th>Satuan Suhu Tujuan</th><th>Hasil Konversi Suhu</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr><td>{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}</td><td>{$this->satuanSuhuTujuan}</td><td>{$hasilKonversi}</td></tr>";
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "Konversi suhu tidak valid.";
        }
    }
}

?>

<style>
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 10px 0;
}

.styled-table th,
.styled-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.styled-table th {
    background-color: #f2f2f2;
}
</style>