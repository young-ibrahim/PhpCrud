<?php

$server = "localhost";

$user = "root";

$password = "";

$nama_database = "movie_rental2";
 

$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db){
    die("Gagal terhubung dengan databse: ". mysqli_connect_error());
}
?>