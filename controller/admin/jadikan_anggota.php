
<?php

    include '../koneksi.php';
    
    session_start();

      if($_SESSION['nama_posisi'] != 'Admin') {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf anda tidak memilik hak akses halaman ini");'; 
        echo 'window.location= "../login.php";';
        echo '</script>';  
      }
      
    // Inisialisasi variable dari data GET
    $nik = $_GET['nik'];
    

    // Query Update Data Status Anggota ke Database
    $queryMapping = "UPDATE mapping_pengguna SET id_posisi = '4' WHERE nik = '$nik'";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryMapping);
    
    // Proses selesai, redirect ke halaman anggota
    echo '<script type="text/javascript">'; 
    echo 'alert("Berhasil! Hak akses baru berhasil diterapkan");'; 
    echo 'window.location= "../../view/admin/sekretariat.php";';
    echo '</script>';  
    //header('location:../view/anggota/ubah_password.php');

    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($queryPeriksa);
    //print_r($queryLogin);

  ?>
