
<?php

    include 'koneksi.php';

    // Inisialisasi variable dari data POST input login
    $nik = $_POST['nik'];
    $password = md5($_POST['password']);

    // Akses Database pengecekan user
    $query = "SELECT * FROM login INNER JOIN mapping_pengguna ON login.nik=mapping_pengguna.nik INNER JOIN posisi ON mapping_pengguna.id_posisi = posisi.id_posisi WHERE login.nik = '$nik' AND password = '$password'";
    $result = mysqli_query($db, $query);
    //echo $posisi;
    // Memeriksa apakah nik dan password tersedia, jika gagal kembali ke halaman login
    if (mysqli_num_rows($result) == 0) {
    	echo '<script type="text/javascript">'; 
        echo 'alert("Maaf nik atau password anda salah");'; 
        echo 'window.location= "../view/login.php";';
        echo '</script>';  
    }

    $row = mysqli_fetch_array($result);
    $posisi = $row['nama_posisi'];
    echo $row['nama_posisi'];
    // Memulai session login user
    session_start();
    $_SESSION['nik'] = $row['nik'];
    $_SESSION['nama_posisi'] = $posisi;
    $_SESSION['status'] = "login";

    // Redirect lokasi hak akses user
    if ($posisi == 'Admin') {
    	header('location:../view/admin/');
    }

    elseif ($posisi == 'Ketua') {
    	header('location:../view/ketua/');
    }

    elseif ($posisi == 'Sekretariat') {
    	header('location:../view/sekretariat/');
    }

    elseif ($posisi == 'Anggota') {
        header('location:../view/anggota/');
    }


    
?>