
<?php

    include '../koneksi.php';

    
    // Inisialisasi variable dari data POST input login
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $hakakses = $_POST['hakakses'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $email = $_POST['email'];
    $password = md5($_POST['password1']);
    $password2 = md5($_POST['password2']);
    $date = date('Y-m-d');

    if ($password != $password2) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Password tidak sama, silahkan ulangi kembali");'; 
        echo 'window.location= "../view/daftar_anggota.php";';
        echo '</script>';  
    }

    else {

    // Query Input Data Pengguna ke Database
    $queryPengguna = "INSERT INTO `pengguna` (`nik`, `nama`, `ttl`, `alamat`, `provinsi`, `email`, `status`, `created`) VALUES ('$nik', '$nama', '$ttl', '$alamat', '$provinsi', '$email', '1', '$date');";

    // Query Input Data Mappung Pengguna ke Database
    $queryMapping = "INSERT INTO mapping_pengguna SET nik = '$nik', id_posisi='$hakakses'";

    // Query Input Data Login ke Database
    $queryLogin = "INSERT INTO login SET nik='$nik', password ='$password'";

    // Query Input Data Portofolio Anggota ke Database
    $queryPortofolio = "INSERT INTO `portofolio` (`NIK`, `Bidang_Keahlian`, `Riwayat_Keahlian`, `Sertifikat_Dimiliki`, `Riwayat_Project`) VALUES ('$nik', ' ', ' ', ' ', ' ');";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryPengguna);
    mysqli_query($db, $queryMapping);
    mysqli_query($db, $queryLogin);
    mysqli_query($db, $queryPortofolio);
    
    // Proses selesai, redirect ke halaman anggota
    echo '<script type="text/javascript">'; 
    echo 'alert("Pendaftaran Berhasil, silahkan login dengan NIK dan Password");'; 
    echo 'window.location= "../../view/admin/buat_akun.php";';
    echo '</script>'; 

    //header('location:../view/anggota')
    }

  ?>