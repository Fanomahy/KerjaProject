<?php

include("config.php");


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['send'])){
    // ambil data dari formulir 
       
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $tanggal = date('Y-m-d') ; // Ambil tanggal saat ini
    // buat query
    $sql = "INSERT INTO feedback (date, name, email, message) VALUE ('$tanggal' ,'$name', '$email', '$message')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
    // kalau berhasil alihkan ke halaman index.php denganstatus=sukses
    header('Location: Obento.php?status=sukses');
    } else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: nointernet.php?status=gagal');
    }
   } else {
    die("Akses dilarang...");
   }
   ?>