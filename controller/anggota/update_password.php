
<?php

    include '../koneksi.php';
    
    session_start();

      if($_SESSION['nama_posisi'] != 'Anggota') {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf anda tidak memilik hak akses halaman ini");'; 
        echo 'window.location= "../login.php";';
        echo '</script>';  
      }
  
    // Inisialisasi variable dari data POST input login
    $nik = $_POST['nik'];
    $passwordlama = md5($_POST['passwordlama']);
    $passwordbaru = md5($_POST['passwordbaru']);

    // Melakukan pemeriksaan password, apakah benar atau salah
    $queryPeriksa = "SELECT * FROM login WHERE nik = '$nik' AND password = '$passwordlama'";
    $result = mysqli_query($db, $queryPeriksa);

    if (mysqli_num_rows($result) == 0) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Maaf password lama salah, silahkan periksa kembali");'; 
        echo 'window.location= "../../view/anggota/ubah_password.php";';
        echo '</script>';  
    }

    // Query Input Data Login ke Database
    $queryLogin = "UPDATE login SET password = '$passwordbaru' WHERE nik = '$nik'";

    // Proses semua aksi ke dalam database
    mysqli_query($db, $queryLogin);
    
    // Proses selesai, redirect ke halaman anggota
    echo '<script type="text/javascript">'; 
    echo 'alert("Berhasil! Password anda telah berhasil diubah");'; 
    echo 'window.location= "../../view/anggota/ubah_password.php";';
    echo '</script>';  
    //header('location:../view/anggota/ubah_password.php');

    // Gunakan print_r untuk melakukan troubleshooting jika terjadi kesalahan
    //print_r($queryPeriksa);
    //print_r($queryLogin);

  ?>
