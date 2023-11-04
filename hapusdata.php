<?php
    require 'fungsi.php';
    $id = $_GET["id"];

    if (hapusdata($id) > 0){
        echo "
        <script>
            alert('Data has been deleted');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Failed Delete Data');
            document.location.href = 'index.php';
        </script>
        ";
    }
?>