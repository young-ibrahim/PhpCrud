<?php
session_start(); 
include("koneksi.php");


if (isset($_GET['film_id'])){
    
    $id = $_GET['film_id'];

    
    $sql = "DELETE FROM film WHERE film_id=$id";
    $query = mysqli_query($db, $sql);

    
    if ($query){
        $_SESSION['notifikasi'] = "Data film berhasil dihapus!";
    }else{
        $_SESSION['notifikasi'] = "Data film gagal dihapus";
    }

    
    header('Location: index.php');
}else{
    
    die("Akses ditolak...");
}
?>