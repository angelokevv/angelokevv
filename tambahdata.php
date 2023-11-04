<?php
require 'fungsi.php';
    $conn = mysqli_connect("localhost","root","","crud_kevin");
    if(isset($_POST["submit"])){
        $kodebarang = $_POST["kodebarang"];
        $namabarang = $_POST["namabarang"];
        $gambar = $_POST["gambar"];
        $hargajual = $_POST["hargajual"];
        $stokbarang = $_POST["stokbarang"];

        if (tambahdata($_POST)> 0){
            echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Tambah Data Barang Toko Abadi</title>
            <style>
                body{
                    background-color: #E0F4FF;
                    padding-left: 32px;
                    padding-right: 32px;
                    display: flex;
                    flex-direction: column;
                }

                h1{
                    background-color: #39A7FF;
                    color: white;
                    padding-left: 16px;
                    padding-right: 16px;
                    padding-top: 8px;
                    padding-bottom: 8px;
                    text-align: center;
                    border-radius: 15px;
                    text
                }

                ul{
                    text-align: center;
                    list-style-type: none;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }

                button{
                    
                }
            </style>
        </head>
        <body>
            <h1>Tambah Data Barang Toko Abadi</h1>
            <form action="" method="post">
                <ul>
                    <li>
                        <label for="kodebarang">Kode Barang</label> <td> : </td>
                        <input type="text" name="kodebarang" id="kodebarang">
                    </li>
                    <li>
                        <label for="namabarang">Nama Barang</label> <td> : </td>
                        <input type="text" name="namabarang" id="namabarang">
                    </li>
                    <li>
                        <label for="hargajual">Harga Barang</label> <td> : </td>
                        <input type="text" name="hargajual" id="hargajual">
                    </li>
                    <li>
                        <label for="stokbarang">Stok Barang</label> <td> : </td>
                        <input type="text" name="stokbarang" id="stokbarang">
                    </li>
                    <li>
                        <label for="gambarbarang">Gambar Barang</label> <td> : </td>
                        <input type="file" name="gambarbarang" id="gambarbarang">
                    </li>
                    <li>
                        <button type="submit" name="submit">Add Data</button>
                    </li>
                </ul>
            </form>
        </body>
    </html>