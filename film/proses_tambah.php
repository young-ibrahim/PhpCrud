<?php

session_start();
include("koneksi.php");


if(isset($_POST['simpan'])){
    
    $judul_film = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $tahun_rilis = $_POST['tahun_rilis'];                                 

    
    $sql = "INSERT INTO film
    (judul_film, genre, tahun_rilis) VALUES ('$judul_film','$genre','$tahun_rilis')";

    $query = mysqli_query($db, $sql);

    
    if ($query){
        $_SESSION['notifikasi'] = "Data film berhasil ditambahkan!";
    }else{
        $_SESSION['notifikasi'] = "Data film gagal ditambahkan!";
    }
    
    header('Location: index.php');
}else{
    
    die("Akses ditolak...");
}
?>