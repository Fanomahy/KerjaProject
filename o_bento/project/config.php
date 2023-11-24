<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "o_bento";   // sesuaikan sama nama database //

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    die("Gagal Terhubung Dengan Database " . mysqli_connect_error());
}
?>
