<?php
include 'header.php';
?>
<section>
    <form action="sv_login.php" method="post">
        <input type="text" placeholder="username" name="username" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">login</button>
    </form>
</section>