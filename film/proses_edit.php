<?php

session_start(); 
include("koneksi.php");


if(isset($_POST['simpan'])){
    
    $id = $_POST['film_id'];
    $judul_film = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $tahun_rilis = $_POST['tahun_rilis'];
    
    $sql = "UPDATE film SET
    judul_film='$judul_film',
    genre='$genre',
    tahun_rilis='$tahun_rilis'
    WHERE film_id=$id";

    $query = mysqli_query($db, $sql);
    
    if ($query){
        $_SESSION['notifikasi'] = "Data film berhasil diperbarui";
    }else{
        $_SESSION['notifikasi'] = "Data film gagal diperbarui";
    }
    
    header('location: index.php');
}else{
    
    die("Akses ditolak...");
}
?>