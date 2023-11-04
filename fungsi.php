<?php
    $conn = mysqli_connect("localhost","root","","crud_kevin");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn,$query);

        $rows = [];

        while ($row = mysqli_fetch_array($result)) {
        $rows [] = $row;
        }
        return $rows;
    }

    function tambahdata($data){
        global $conn;
        $kodebarang = $data['kodebarang'];
        $namabarang = $data['namabarang'];
        $gambar = $data['gambar'];
        $hargajual = $data['hargajual'];
        $stokbarang = $data['stokbarang'];
    
        $query = "INSERT INTO product VALUES ('','$kodebarang','$namabarang','$gambar','$hargajual','$stokbarang')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapusdata($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM product WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id = $data["id"];
        $kodebarang = $data['kodebarang'];
        $namabarang = $data['namabarang'];
        $gambar = $data['gambar'];
        $hargajual = $data['hargajual'];
        $stokbarang = $data['stokbarang'];
    
        $query = "UPDATE product SET
        kodebarang = IF('$kodebarang' != '', '$kodebarang', kodebarang),
        namabarang = IF('$namabarang' != '', '$namabarang', namabarang),
        gambar = IF('$gambar' != '', '$gambar', gambar),
        hargajual = IF('$hargajual' != '', '$hargajual', hargajual),
        stokbarang = IF('$stokbarang' != '', '$stokbarang', stokbarang)
        WHERE id = $id;    
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
?>