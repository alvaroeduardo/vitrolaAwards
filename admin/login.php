<?php
    include('./assets/config/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vitrola Awards • Login</title>
        <link rel="stylesheet" href="../assets/style/login.css">
    </head>
    <body>
        
        <main>
            <form action="./admin/assets/config/functions/login.php" method="post">
                <img src="../assets/img/logo_white.svg">
                
                <label for="">Nickname:</label>
                <input type="text" placeholder="Insert your nickname" name="nickname">

                <label for="">Password:</label>
                <input type="password" placeholder="Insert your password" name="password">

                <button type="submit">LOGIN</button>
            </form>
        </main>
    </body>
</html>