<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang 2D</title>
</head>
<body>
    <h1>Data Bidang 2D</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php

            require_once 'Segitiga.php';
            require_once 'PersegiPanjang.php';
            require_once 'Lingkaran.php';

            $segitiga = new Segitiga(3, 6, 5, 6, 7);
            $persegiPanjang = new PersegiPanjang(4, 6);
            $lingkaran = new Lingkaran(5);

            $bidang2D = [$segitiga, $persegiPanjang, $lingkaran];

            foreach ($bidang2D as $index => $bidang) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . $bidang->namaBidang() . "</td>";
                echo "<td> - </td>";
                echo "<td>" . $bidang->luasBidang() . "</td>";
                echo "<td>" . $bidang->kelilingBidang() . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
