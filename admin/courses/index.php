<?php
include '../security.php';
include '../../koneksi.php';

$sql = "SELECT * FROM courses";
$query = mysqli_query($conn, $sql);
?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td>edit | delete</td>
        </tr>
    </tbody>
</table>