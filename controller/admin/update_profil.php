
<?php

    include '../koneksi.php';

    session_start();

      if($_SESSION['nama_posisi'] != 'Admin') {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf anda tidak memilik hak akses halaman ini");'; 
        echo 'window.location= "../login.php";';
        echo '</script>';  
      }
    
    // Inisialisasi variable dari data POST input login
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $email = $_POST['email'];
    //$password = md5($_POST['password']);

    // Query Input Data Pengguna ke Database
    $queryPengguna = "UPDATE pengguna SET nama = '$nama', ttl = '$ttl', alamat = '$alamat', provinsi = '$provinsi', email = '$email' WHERE nik = '$nik'";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryPengguna);
    
    // Proses selesai, redirect ke halaman anggota
    header('location:../../view/admin/profil.php');

    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($queryPengguna);

  ?>
