<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

    <h1>Data Pribadi</h1>

    <form method="POST">
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukan nama"><br><br>

        <label for="">Pekerjaan</label>
        <select name="pekerjaan" id="">
            <option value="">---Pekerjaan----</option>
            <option value="Programmer">Programmer</option>
            <option value="content Creator">Content Creator</option>
            <option value="ui/ux">UI/UX</option>
            <option value="Pegawai">Pegawai Swasta</option>
            <option value="Pns">PNS</option>
            <option value="Administrator">Administrator</option>
            <option value="Karyawan">Karyawan</option>
            <option value="Pengusaha">Pengusaha</option>
            <option value="Trader">Trader</option>
            <option value="Tentara">Tentara</option>
        </select>
        <br><br>

        <input type="radio" id="berenang" name="hobi" value="Berenang">
        <label for="html">Berenang</label>

        <input type="radio" id="sepakbola" name="hobi" value="Sepak Bola">
        <label for="html">Sepak Bola</label>

        <input type="radio" id="sepaktakraw" name="hobi" value="Sepak Takraw">
        <label for="html">Sepak Takraw</label>

        <input type="radio" id="Hiking" name="hobi" value="Hiking">
        <label for="html">Hiking</label>

        <input type="radio" id="futsal" name="hobi" value="Futsal">
        <label for="html">Futsal</label><br><br>
        <!-- batas -->
        <input type="radio" id="memasak" name="hobi" value="Memasak">
        <label for="html">Memasak</label>

        <input type="radio" id="mancing" name="hobi" value="Mancing">
        <label for="html">Mancing</label>

        <input type="radio" id="badminton" name="hobi" value="Badminton">
        <label for="html">Badminton</label>

        <input type="radio" id="gaming" name="hobi" value="gaming">
        <label for="html">Gaming</label>

        <input type="radio" id="Calisthenic" name="hobi" value="Calisthenic">
        <label for="html">Calisthenic</label><br><br>


        <button name="proses" type="submit">simpan</button>
    </form>

<?php
$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$hobi = $_POST['hobi'];
$tombol = $_POST['proses'];

if(isset($tombol)){

?>
<br><br><br>
<table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Hobby</th>
        </tr>
        <tr>
            <td> <?=$nama?> </td>
            <td> <?=$pekerjaan?> </td>
            <td> <?=$hobi?> </td>
        </tr>
    </table>


<?php } ?>


</body>
</html>