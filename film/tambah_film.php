<!DOCTYPE html>
<html>
<head>
    <title>Data Film</title>
</head>
<body>
    <h3>Tambah Data Film</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Judul Film</td>
                <td><input type="text" name="judul_film" required></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><input type="text" name="genre" required></td>
            </tr>
            <tr>
                <td>Tahun Rilis</td>
                <td><input type="text" name="tahun_rilis" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan</button>
    </form>
</body>
</html>