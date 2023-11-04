<?php
    require 'fungsi.php';

    $barang = query('SELECT * FROM product');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kevin Fritz Angelo</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="table">
            <h1>Car Register Database</h1>

            <a href="tambahdata.php">Add Car Data</a>
            <br><br>

            <table border="1" cellpadding="10" cellspacing="0" class="center">
                <tr>
                    <th>No. </th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                </tr>
                <?php $i = 1;
                foreach ($barang as $row) : ?> 
    
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubahdata.php?id=<?= $row['id']; ?>">Update</a> |
                        <a href="hapusdata.php?id= <?= $row["id"];?>" onclick="return confirm('Are you sure do this action ?')">Delete</a>
                    </td>
                    <td><img src="img/<?= $row['gambar']; ?>" width="100"></td>
                    <td><?= $row["namabarang"]; ?></td>
                    <td><?= $row["kodebarang"]; ?></td>
                    <td><?= $row["hargajual"]; ?></td>
                    <td><?= $row["stokbarang"]; ?></td>
                </tr>
                <?php 
                $i++; 
                endforeach;
                ?>
            </table>
        </div>
    </body>
</html>