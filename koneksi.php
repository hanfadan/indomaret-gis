<?php

$host = 'localhost';
$port = '5432'; // Port server
$user = 'postgres'; //Username postgis
$pass = '123';
$dbname = 'latihan'; // nama database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if(!$conn){
  echo"Koneksi Gagal".pg_error();
  exit;
}

 ?>
