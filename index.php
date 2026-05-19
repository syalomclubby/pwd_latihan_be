<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelas Kopi Online</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header>
    <h1>Kelas Kopi Online</h1>
    <p>Belajar menyeduh kopi dan membangun bisnis kopi rumahan</p>
</header>

<section>
    <h2>Tentang Program</h2>
    <p>
        Kelas Kopi Online adalah program pelatihan sederhana untuk pemula yang ingin 
        belajar teknik dasar menyeduh kopi, membuat latte art, dan memahami peluang 
        bisnis kopi rumahan.
    </p>
</section>

<section>
    <h2>Pilihan Kelas</h2>

    <div class="cards">
        <?php
        $sql = "SELECT * FROM courses";
        $query = mysqli_query($conn, $sql);
        while($result = mysqli_fetch_array($query)){
        ?>
        <div class="card">
            <h3><?= $result['name'] ?></h3>
            <p>
                <?= $result['description'] ?>
            </p>
            <strong>Rp <?= number_format($result['price'], 0,',','.') ?></strong>
        </div>
        <?php
        }
        ?>
    </div>
</section>

</body>
</html>