<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIM Information - Universitas Komputer Indonesia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<?php
error_reporting(0);
$NIM = $_POST['nim'];


$fakultas = substr($NIM, 0, 1);
//validasi fakultas
if ($fakultas == "1") {
    $fakultas = "Teknik & Ilmu Komputer";
} elseif ($fakultas == "2") {
    $fakultas = "Ekonomi";
} elseif ($fakultas == "3") {
    $fakultas = "Hukum";
} elseif ($fakultas == "4") {
    $fakultas = "Sosial & Politik";
} elseif ($fakultas == "5") {
    $fakultas = "Desain";
} elseif ($fakultas == "6") {
    $fakultas = "Sastra";
}

$angkatan = substr($NIM, 3, 2);

$nourut = substr($NIM, 5, 3);

$jurusan = substr($NIM, 1, 2);


$detail = '<a href="https://kuliahonline.unikom.ac.id/?List/&lOP=mhs&q=' . $NIM . '">Tap For Detail</a>';

$tingkat = 0;
//validasi jurusan
if ($jurusan == "01") {
    $jurusan = "Teknik Informatika";
    $tingkat = "S1";
} elseif ($jurusan == "02") {
    $jurusan = "Teknik Komputer";
    $tingkat = "S1";
} elseif ($jurusan == "03") {
    $jurusan = "Teknik Industri";
    $tingkat = "S1";
} elseif ($jurusan == "31") {
    $jurusan = "Teknik Elektro";
    $tingkat = "S1";
} elseif ($jurusan == "30") {
    $jurusan = "Teknik Sipil";
    $tingkat = "S1";
} elseif ($jurusan == "04") {
    $jurusan = "Teknik Arsitektur";
    $tingkat = "S1";
} elseif ($jurusan == "05") {
    $jurusan = "Sistem Informasi";
    $tingkat = "S1";
} elseif ($jurusan == "06") {
    $jurusan = "Perencanaan Wilayah dan Kota";
    $tingkat = "S1";
} elseif ($jurusan == "08") {
    $jurusan = "Teknik Komputer";
    $tingkat = "D3";
} elseif ($jurusan == "09") {
    $jurusan = "Manajemen Informatika";
    $tingkat = "D3";
} elseif ($jurusan == "10") {
    $jurusan = "Komputerisasi Akuntansi";
    $tingkat = "D3";
} elseif ($jurusan == "11") {
    $jurusan = "Akuntansi";
    $tingkat = "S1";
} elseif ($jurusan == "12") {
    $jurusan = "Manajemen";
    $tingkat = "S1";
} elseif ($jurusan == "13") {
    $jurusan = "Akuntansi";
    $tingkat = "S1";
} elseif ($jurusan == "14") {
    $jurusan = "Manajemen Pemasaran";
    $tingkat = "D3";
} elseif ($jurusan == "15") {
    $jurusan = "Keuangan dan Perbankan";
    $tingkat = "D3";
} elseif ($jurusan == "16") {
    $jurusan = "Ilmu Hukum";
    $tingkat = "S1";
} elseif ($jurusan == "18") {
    $jurusan = "Ilmu Komunikasi";
    $tingkat = "S1";
} elseif ($jurusan == "43") {
    $jurusan = "Hubungan Internasional";
    $tingkat = "S1";
} elseif ($jurusan == "17") {
    $jurusan = "Ilmu Pemerintahan";
    $tingkat = "S1";
} elseif ($jurusan == "34") {
    $jurusan = "Sekretaris Eksekutif";
    $tingkat = "D3";
} elseif ($jurusan == "33") {
    $jurusan = "Public Relations";
    $tingkat = "D3";
} elseif ($jurusan == "19") {
    $jurusan = "Desain Komunikasi Visual";
    $tingkat = "S1";
} elseif ($jurusan == "20") {
    $jurusan = "Desain Interior";
    $tingkat = "S1";
} elseif ($jurusan == "21") {
    $jurusan = "Desain Komunikasi Visual";
    $tingkat = "D3";
} elseif ($jurusan == "37") {
    $jurusan = "Sastra Inggris";
    $tingkat = "S1";
} elseif ($jurusan == "38") {
    $jurusan = "Sastra Jepang";
    $tingkat = "S1";
} elseif ($jurusan == "39") {
    $jurusan = "Sastra Inggris";
    $tingkat = "D3";
}

?>

<body>
    <form action="" method="POST">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
                    <span class="contact100-form-title"> NIM Information
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="NIM is required">
                        <span class="label-input100">Nomor Induk Mahasiswa</span>
                        <input class="input100" type="text" name="nim" placeholder="Masukan NIM">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button type="submit" name="submit" value="submit" class="contact100-form-btn">
                                <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                    </div>
                    <?php
                    // pre_r($_POST);
                    if (isset($_POST['submit'])) {
                        echo "<br>
                        <center>
                        <table>
                        ";
                    ?>
                        <tr>
                            <td width="100px"><?= "<p>NIM" ?></td>
                            <td width="20px"><?= "<p>:" ?></td>
                            <td width="200px"><?= "<p>" . $NIM ?></td>
                        </tr>
                    <?php

                        echo "<tr><td><p>Fakultas</td>", "<td><p> : </td>", "<td><p>", $fakultas, "</td>", "</td></tr>";
                        echo "<tr><td><p>Jurusan</td>", "<td><p> : </td>", "<td><p>", $jurusan, "</td>", "</td></tr>";
                        echo "<tr><td><p>Tingkat</td>", "<td><p> : </td>", "<td><p>", $tingkat, "</td>", "</td></tr>";
                        echo "<tr><td><p>Angkatan</td>", "<td><p> : </td>", "<td><p>", ($angkatan + 2000), "</td>", "</td></tr>";
                        echo "<tr><td><p>No Urut</td>", "<td><p> : </td>", "<td><p>", $nourut, "</td>", "</td></tr>";
                        echo "<tr><td><p>More</td>", "<td><p> : </td>", "<td><p>", $detail, "</td>", "</td></tr>";
                        echo "</center></table>";
                    }
                    ?>
                </form>
                <br>
                <p>&copy;Made with &hearts; by <a href="instagram.com/resaendr">Res</a></p>
            </div>
        </div>
    </form>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>