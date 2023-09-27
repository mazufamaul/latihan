<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color:yellow;
        }
    </style>
</head>
<body>
    
    <?php
    $m1 = ['nim' => '0111111', 'nama' => 'Andu Setyo', 'nilai' =>95];
    $m2 = ['nim' => '0111112', 'nama' => 'Aldi Taher', 'nilai' =>89];
    $m3 = ['nim' => '0111113', 'nama' => 'Reno wibow', 'nilai' =>78];
    $m4 = ['nim' => '0111114', 'nama' => 'Muhamad jokil', 'nilai' =>85];
    $m5 = ['nim' => '0111115', 'nama' => 'Rinjokil Setyo', 'nilai' =>65];
    $m6 = ['nim' => '0111116', 'nama' => 'abdur ewer ', 'nilai' =>55];
    $m7 = ['nim' => '0111117', 'nama' => 'Aji ', 'nilai' =>85];
    $m8 = ['nim' => '0111118', 'nama' => 'rinaldi Setyo', 'nilai' =>65];
    $m9 = ['nim' => '0111119', 'nama' => 'walih Setyo', 'nilai' =>85];
    $m10 = ['nim' => '0111110', 'nama' => 'kobul Setyo', 'nilai' =>75];

    $ar_judul = ['No', 'Nim', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa =[$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

    // Fungsi untuk mendapatkan Grade
    function getGrade($nilai) {
        if ($nilai >= 90) {
            return 'A';
        } elseif ($nilai >= 80) {
            return 'B';
        } elseif ($nilai >= 70) {
            return 'C';
        } elseif ($nilai >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }
    ?>

    <h1 align="center">Daftar Nilai Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul): ?>
                    <th><?= $judul ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalNilai = 0;
            $nilaiTertinggi = -1;
            $nilaiTerendah = 101;
            $jumlahMahasiswa = count($mahasiswa);
            foreach($mahasiswa as $key => $mhs): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nilai'] ?></td>
                    <td><?= ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus' ?></td>
                    <td><?= getGrade($mhs['nilai']) ?></td>
                    <td>
                        <?php
                        $grade = getGrade($mhs['nilai']);
                        switch ($grade) {
                            case 'A':
                                echo 'Sangat Memuaskan';
                                break;
                            case 'B':
                                echo 'Memuaskan';
                                break;
                            case 'C':
                                echo 'Cukup';
                                break;
                            case 'D':
                                echo 'Kurang';
                                break;
                            case 'E':
                                echo 'Sangat Kurang';
                                break;
                        }
                        ?>
                    </td>
                </tr>
                <?php
                $totalNilai += $mhs['nilai'];
                if ($mhs['nilai'] > $nilaiTertinggi) {
                    $nilaiTertinggi = $mhs['nilai'];
                }
                if ($mhs['nilai'] < $nilaiTerendah) {
                    $nilaiTerendah = $mhs['nilai'];
                }
            endforeach;
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total</td>
                <td><?= $totalNilai ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">Rata-rata</td>
                <td><?= number_format($totalNilai / $jumlahMahasiswa, 2) ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">Nilai Tertinggi</td>
                <td><?= $nilaiTertinggi ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">Nilai Terendah</td>
                <td><?= $nilaiTerendah ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">Jumlah Mahasiswa</td>
                <td><?= $jumlahMahasiswa ?></td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="3">Jumlah Keseluruhan Nilai</td>
                <td><?= $totalNilai ?></td>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>

</body>
</html>
