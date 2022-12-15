<?php
$servername="localhost";
$user="root";
$pass="";
$database="berita_bola";

$conn=new mysqli($servername,$user,$pass, $database);

if (!$conn){
   die("Koneksi gagal:" . mysqli_connect_error());
}
?>