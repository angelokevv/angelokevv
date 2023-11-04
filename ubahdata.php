<?php
require 'fungsi.php';

$id = $_GET["id"];

$brg = query("SELECT * FROM product WHERE id = $id")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <h1>Update Data Input</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$brg['id'];?>">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang" required value = <?= $brg["kodebarang"];?>>
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang" required value = <?= $brg["namabarang"];?>>
                </li>
                <li>
                    <input type="text" name="gambarbarang" id="gambarbarang" required value = <?= $brg["gambar"];?>>
                    <label for="gambarbarang">Gambar Barang</label>
                </li>
                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual" required value = <?= $brg["hargajual"];?>>
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name="stokbarang" id="stokbarang" required value = <?= $brg["stokbarang"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Update Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>