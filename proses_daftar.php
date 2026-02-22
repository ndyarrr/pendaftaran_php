<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['name'];
    $nisn = $_POST['nisn'];
    $tempat = $_POST['tmpt'];
    $tanggal = $_POST['tgl'];
    $klmn = $_POST['klmn'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];

    $asal = $_POST['asal'];
    $tahun = $_POST['tahun'];
    $rata = $_POST['rata'];

    $jurusan = $_POST['jurusan'];
    $ekskul = isset($_POST['ekskul']) ? implode(", ", $_POST['ekskul']) : "Tidak ada yang diminati";

    $nama_ayah = $_POST['nama_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $nomor_ortu = $_POST['nomor_ortu'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/php.css">
    <title>Succes</title>
</head>

<body>
    <div class="main">

    <img class="logo" src="./assets/logo-esemkitahd.png" alt="logo-smea">

    <div class="bg"></div>

    <div class="returnbox">

        <h1>Data Berhasil Dikirim!</h1>
        <h3>Semoga di terima</h3>


        <div class="section">A. Data Siswa</div>

        <div class="data">

            <div class="row">
                <span class="label">Nama</span>
                <span class="value">
                    <?= $nama ?>
                </span>
            </div>

            <div class="row">
                <span class="label">NISN</span>
                <span class="value">
                    <?= $nisn ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Tempat Lahir</span>
                <span class="value">
                    <?= $tempat ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Tanggal Lahir</span>
                <span class="value">
                    <?= $tanggal ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Jenis Kelamin</span>
                <span class="value">
                    <?= $klmn ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Agama</span>
                <span class="value">
                    <?= $agama ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Alamat</span>
                <span class="value">
                    <?= $alamat ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Nomor HP</span>
                <span class="value">
                    <?= $nomor ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Email</span>
                <span class="value">
                    <?= $email ?>
                </span>
            </div>

        </div>



        <div class="section">B. Data Sekolah Asal</div>

        <div class="data">

            <div class="row">
                <span class="label">Asal Sekolah</span>
                <span class="value">
                    <?= $asal ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Tahun Lulus</span>
                <span class="value">
                    <?= $tahun ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Nilai Rata-rata</span>
                <span class="value">
                    <?= $rata ?>
                </span>
            </div>

        </div>



        <div class="section">C. Pilihan Sekolah dan Jurusan</div>

        <div class="data">

            <div class="row">
                <span class="label">Jurusan</span>
                <span class="value">
                    <?= $jurusan ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Ekstrakulikuler di minati</span>
                <span class="value">
                    <span class="badge"><?= str_replace(", ", "</span><span class='badge'>", $ekskul) ?></span>
                </span>
            </div>

        </div>



        <div class="section">D. Data Orang Tua</div>

        <div class="data">

            <div class="row">
                <span class="label">Nama Ayah</span>
                <span class="value">
                    <?= $nama_ayah ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Pekerjaan Ayah</span>
                <span class="value">
                    <?= $pekerjaan_ayah ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Nama Ibu</span>
                <span class="value">
                    <?= $nama_ibu ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Pekerjaan Ibu</span>
                <span class="value">
                    <?= $pekerjaan_ibu ?>
                </span>
            </div>

            <div class="row">
                <span class="label">Nomor HP Ortu</span>
                <span class="value">
                    <?= $nomor_ortu ?>
                </span>
            </div>

        </div>

        <div class="btnback">
            <a href="index.html">Kembali</a>
        </div>

    </div>
    </div>

</body>

</html>