<?php
    define('SERVIDOR', 'localhost');
    define('USUARIO',  'root');
    define('SENHA',    'root');
    define('DB',       'vitrolaAwards');

    // VARIÁVEL DE CONEXÃO
    $conn = mysqli_connect(SERVIDOR, USUARIO, SENHA, DB) or die ('Não foi possível conectar com o Banco de Dados');

    // VERIFICA SE O SITE ESTÁ EM MANUTENÇÃO OU NÃO
    $query_manu = "SELECT manu FROM config";
    $result_manu = mysqli_query($conn, $query_manu);
    $valorManu = mysqli_fetch_array($result_manu);

    if($valorManu["manu"] == 'true'){
        header('Location: ../../../assets/modules/manu.html');
    }

    