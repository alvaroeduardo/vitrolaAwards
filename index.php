<?php
    include('./admin/assets/config/conn.php');
?>

<h1>Olá <?php echo $_SESSION['nickname']; ?></h1>
<a href="./admin/assets/config/functions/logout.php">Sair</a>