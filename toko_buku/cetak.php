<?php
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$sql = "SELECT * FROM buku";
$query = mysqli_query($connect, $sql);
$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Data Buku - BookNest</title>
            <link rel="stylesheet" href="print_buku.css">
        </head>
        <body>
        <h2>BookNest </h2>
        <h3>Data Buku </h3>';

// Menghitung total stok

$total_stok = 0;

$html .= '<table border="1" cellpadding="10" cellspacing="0">
            <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Kode buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Stok</th>
            </tr>';

$i = 1;

foreach($query as $buku) {
    $html .= '<tr>
        <td>'. $i++ .'</td>
        <td><img src="image/'. $buku['image'] .'" width="50"></td>
        <td>'. $buku["kode_buku"] .'</td>
        <td>'. $buku["judul"] .'</td>
        <td>'. $buku["penulis"] .'</td>
        <td>'. $buku["tahun"] .'</td>
        <td>'. $buku["harga"] .'</td>
        <td>'. $buku["stok"] .'</td>
    </tr>';

    // Menambahkan stok buku ke total stok
    $total_stok += $buku["stok"];
}

$html .= '</table>';
$html .= '<p>Total stok: ' . $total_stok . ' buku</p>
<p>Total data buku: '. mysqli_num_rows($query). ' buku</p>';
$html .= '</body>
        </html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Data Buku.pdf','I');
?>
