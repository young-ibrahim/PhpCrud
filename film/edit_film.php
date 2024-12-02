<?php

include("koneksi.php");


$id = $_GET['id'];


$query = $db->query("SELECT * FROM film WHERE film_id = '$id'");
$movie = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Film</title>
    </head>
    <body>
        <h3>Edit Data Film</h3>
        <form action="proses_edit.php" method="POST">
        
        <input type="hidden" name="film_id" value="<?php echo $movie['film_id']; ?>">
        <table border="0">
            <tr>
                <td>Judul Film</td>
                <td>
                    <input type="text" name="judul_film"
                    value="<?php echo $movie['judul_film']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                <input type="text" name="genre"
                value="<?php echo $movie['genre']; ?>" required>  
                </td>
            </tr>
            <tr>
                <td>Tahun Rilid</td>
                <td>
                    <input type="text" name="tahun_rilis"
                    value="<?php echo $movie['tahun_rilis']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">simpan</button>
        </form>
    </body>
</html>