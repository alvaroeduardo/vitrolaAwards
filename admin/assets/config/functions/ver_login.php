<?php
    if(!$_SESSION['nickname']){
        header('Location: ../../../login.php');
        exit();
    }