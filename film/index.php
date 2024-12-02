<?php
include("koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta>
    <meta>
    <title>Film</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Film</h2>
    <?php if (isset($_SESSION['notifikasi'])):?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']);?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Judul Film</th>
                <th>Genre</th>
                <th>Tahun Rilis</th>
                <th><a href="tambah_film.php">Tambah Film</a></th>
            </tr>
        </thead>    
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM film");
            while ($movie = $query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    
                    <td><?php echo $movie['judul_film']?></td>
                    <td><?php echo $movie['genre']?></td>
                    <td><?php echo $movie['tahun_rilis']?></td>
                     <td align="center">
                     <a href="edit_film.php?id=<?php echo $movie['film_id']?>">Edit</a>
                     <a onclick="return confirm('anda yakin ingin menghapus data?')"
                     href="hapus_film.php?film_id=<?php echo $movie['film_id']?>">hapus</a>
                     </td>
                    </tr>
                    <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>