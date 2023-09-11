<?php
require 'functions.php';

$id = $_GET["id_customer"];

if(hapus($id) > 0) {
    echo "<script>
        alert('Customer berhasil dihapus!');
        document.location.href = 'customer.php';
        </script>";
    } else {
        echo "<script>
        alert('Customer gagal dihapus!');
        document.location.href = 'customer.php';
        </script>";
    }
?>