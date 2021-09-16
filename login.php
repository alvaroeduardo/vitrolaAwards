<?php
    include('./admin/assets/config/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vitrola Awards • Login</title>
        <link rel="stylesheet" href="./assets/style/login.css">
    </head>
    <body>
        
        <main class="login_box">
            <img src="https://imgur.com/X5mCRsv.png">

            <form action="./admin/assets/config/functions/login.php" method="post">
                <label for="nickname">Nick:</label>
                <input type="text" placeholder="Enter your nickname" name="nickname">

                <label for="password">Password:</label>
                <input type="password" placeholder="Enter your password" name="password">

                <button type="submit">LOGIN</button>
            </form>
        </main>
    </body>
</html>