
<?php
                include 'koneksi.php';
                $nik = $_POST['nik'];
                $password = $_POST['password'];

                //$query = "SELECT * FROM login WHERE nik='$nik' AND password = '$password'";
                $query = "SELECT * FROM `login` INNER JOIN mapping_pengguna ON login.nik=mapping_pengguna.nik INNER JOIN posisi ON mapping_pengguna.id_posisi = posisi.id_posisi WHERE login.nik = '$nik' AND password = '$password'";
                $result = mysqli_query($db, $query);

                if (mysqli_num_rows($result) == 0) {
                	header('location:../login.php');
                }

                $row = mysqli_fetch_array($result);

                $posisi = $row['nama_posisi'];

                if ($posisi == 'Admin') {
                	header('location:../admin/');
                }
                elseif ($posisi == 'Ketua') {
                	header('location:../ketua/');
                }
                elseif ($posisi == 'Sekretariat') {
                	header('location:../sekretariat/');
                }
                else {
                	header('location:../anggota/');
                }
                
              ?>