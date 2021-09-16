<?php
    include('../conn.php');

    if(empty($_POST['nickname']) || empty($_POST['password'])){
        header('Location: ../../../../login.php');
        exit();
    }

    $nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $queryLogin = "SELECT * FROM jrd_acad WHERE nickname = '{$nickname}' AND password = md5('{$password}')";
    $resulLogin = mysqli_query($conn, $queryLogin);
    $rowLogin = mysqli_num_rows($resulLogin);

    if($rowLogin == 1){
        $_SESSION['nickname'] = $nickname;
        header('Location: ../../../../index.php');
        exit();
    } else {
        header('Location: ../../../../login.php');
        exit();
    }