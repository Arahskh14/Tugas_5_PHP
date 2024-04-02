<?php
// Memasukkan data ke dalam objek Mahasiswa
require_once 'Mahasiswa.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$mataKuliah = $_POST['mataKuliah'];
$nilai = $_POST['nilai'];
$mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $mataKuliah, $nilai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Nilai Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
    <h2>Hasil Input Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>Keterangan</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $mahasiswa->nim; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $mahasiswa->nama; ?></td>
        </tr>
        <tr>
            <td>Kuliah</td>
            <td><?php echo $mahasiswa->kuliah; ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td><?php echo $mahasiswa->mataKuliah; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td><?php echo $mahasiswa->nilai; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $mahasiswa->getStatus(); ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $mahasiswa->getGrade(); ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td><?php echo $mahasiswa->getPredikat(); ?></td>
        </tr>
    </table>
</body>
</html>
