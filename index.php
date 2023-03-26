<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>

<body>
    <div class="container">
        <h1>Data Barang</h1>
        <br>
        <a href="tambah.php">Tambah Data</a>
        <br>
        <div class="main">
            <table border="1">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Katagori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php if ($result) : ?>
                    <?php while ($row = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td align="center"><?php echo "<img src='img/$row[gambar]' width='150' height='100' />"; ?></td>
                            <td align="center"><?= $row['nama']; ?></td>
                            <td align="center"><?= $row['kategori']; ?></td>
                            <td align="center"><?= $row['harga_beli']; ?></td>
                            <td align="center"><?= $row['harga_jual']; ?></td>
                            <td align="center"><?= $row['stok']; ?></td>
                            <td align="center">
                                <a href="ubah.php?id=<?php echo $row['id_barang']; ?>" >Ubah</a>
                                <a href="hapus.php?id=<?php echo $row['id_barang']; ?>" >Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile;
                else : ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>

</html>