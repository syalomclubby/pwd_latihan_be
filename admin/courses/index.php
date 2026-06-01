<?php
include '../security.php';
include '../../koneksi.php';

$sql = "SELECT * FROM courses";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Course</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<section>

    <h1>Data Course</h1>

    <p>
        <a href="../dashboard.php">Kembali ke Dashboard</a> |
        <a href="tambah.php">Tambah Course</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php
        $no = 1;

        while($result = mysqli_fetch_array($query)){
            $id = $result['id'];
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $result['name']; ?></td>
                <td><?= $result['description']; ?></td>
                <td><?= $result['price']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $id; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $id; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>

</section>

</body>
</html>