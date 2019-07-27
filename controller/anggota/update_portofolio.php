
<?php

    include '../koneksi.php';
    
    session_start();

      if($_SESSION['nama_posisi'] != 'Anggota') {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf anda tidak memilik hak akses halaman ini");'; 
        echo 'window.location= "../login.php";';
        echo '</script>';  
      }
    // Inisialisasi variable dari data POST input
    $nik = $_POST['nik'];
    $Bidang_Keahlian = $_POST['bidang_keahlian'];
    $Riwayat_Keahlian = $_POST['riwayat_keahlian'];
    $Sertifikat_Dimiliki = $_POST['sertifikat_dimiliki'];
    $Riwayat_Project = $_POST['riwayat_project'];

    // Query Input Data Portofolio ke Database
    //$queryPengguna = "UPDATE pengguna SET nama = '$nama', ttl = '$ttl', alamat = '$alamat', provinsi = '$provinsi', email = '$email' WHERE nik = '$nik'";

    $queryPortofolio = "UPDATE portofolio SET Bidang_Keahlian = '$Bidang_Keahlian', Riwayat_Keahlian = '$Riwayat_Keahlian', Sertifikat_Dimiliki='$Sertifikat_Dimiliki', Riwayat_Project='$Riwayat_Project' WHERE NIK = $nik";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryPortofolio);
    
    // Proses selesai, redirect ke halaman anggota
    header('location:../../view/anggota/portofolio.php');

    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($queryPortofolio);

  ?>
