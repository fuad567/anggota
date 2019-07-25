
<?php

    include 'koneksi.php';
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryPengguna = "INSERT INTO `pengguna` (`nik`, `nama`, `ttl`, `alamat`, `provinsi`, `email`, `status`) VALUES ('$nik', '$nama', '$ttl', '$alamat', '$provinsi', '$email', '0');";
    $queryMapping = "INSERT INTO mapping_pengguna SET nik = '$nik', id_posisi='4'";
    $queryLogin = "INSERT INTO login SET nik='$nik', password ='$password'";
    $queryPortofolio = "INSERT INTO `portofolio` (`NIK`, `Bidang_Keahlian`, `Riwayat_Keahlian`, `Sertifikat_Dimiliki`, `Riwayat_Project`) VALUES ('$nik', ' ', ' ', ' ', ' ');";
    //$result = mysqli_query($db, $query);

    //print_r($queryPortofolio);
    mysqli_query($db, $queryPengguna);
    mysqli_query($db, $queryMapping);
    mysqli_query($db, $queryLogin);
    mysqli_query($db, $queryPortofolio);
    
    header('location:../anggota')
  ?>