<?php
    include('./admin/assets/config/conn.php');
    include('./admin/assets/config/functions/ver_login.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vitrola Awards • Hello <?php echo $_SESSION['nickname']; ?></title>
        <link rel="stylesheet" href="./assets/style/index.css">
        
    </head>
    <body>
        <main>
            
            <header>
                <h1>Vitrola Awards • 2021</h1>
                <h1>Categoria</h1>
            </header>
            <form action="" method="post">
                <!-- <section id="ctgr_01" class="ctgr">
                    <div id="indc_01" class="indic">
                        <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=ferrazmatheus&direction=2&head_direction=3&size=l&gesture=sml&action=std,wav" alt="">
                    </div>
                    <footer>
                        <button>Next</button>
                    </footer>
                </section> -->
                

                <?php
                    // CATEGORIAS
                    $catQuery = "SELECT * FROM categorias";
                    $catResult = mysqli_query($conn, $catQuery);

                    // INDICAÇÕES
                    $indicQuery = "SELECT * FROM indicacoes INNER JOIN categorias ON (ctgr = id_ctgr)";
                    $indicResult = mysqli_query($conn, $indicQuery);

                    //INDICADOS
                    $indicadoQuery = "SELECT * FROM indicados INNER JOIN indicacoes ON (indic = id_indic)";
                    $indicadoResult = mysqli_query($conn, $indicadoQuery);

                    // ESCOLHE A IMAGEM DA PESSOA CONFORME A NACIONALIDADE DELA
                    function imgUser($nasc, $name){
                        // https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=ferrazmatheus&direction=2&head_direction=3&size=l&gesture=sml&action=std,wav&frame=3

                        $hhbr = ".com.br"; // BRASIL
                        $hhde = ".de"; // ALEMANHA
                        $hhes = ".es"; // ESPANHA
                        $hhfi = ".fi"; // FINLÂNDIA
                        $hhfr = ".fr"; // FRANÇA
                        $hhnl = ".nl"; // HOLANDA
                        $hhus = ".com"; // ESTADOS UNIDOS
                        $hhit = ".it"; // ITÁLIA
                        $hhtr = ".tr"; // TURQUIA

                        if($nasc == "hhbr"){
                            return "https://www.habbo". $hhbr ."/habbo-imaging/avatarimage?img_format=png&user=". $name ."&direction=2&head_direction=3&size=l&gesture=sml&action=std,wav&frame=3";
                        }

                    }

                    while($row_cat = mysqli_fetch_assoc($catResult)){
                        echo "<section id='ctgr_". $row_cat['id_ctgr'] ."' class='ctgr'>";

                        while($row_indic = mysqli_fetch_assoc($indicResult)){
                            echo "<div id='indic_". $row_indic['ctgr'] ."' class='indic'>";
                                echo "<h2>". $row_indic['indic_name'] ."</h2>";
                                echo "<hr></hr>";

                                while($row_indicado = mysqli_fetch_assoc($indicadoResult)){
                                    echo "<div class='indicado'>";
                                    echo "<img src='". imgUser($row_indicado['nasc'], $row_indicado['name']) ."'>";

                                    echo "<input type='radio' value='". $row_indicado['name'] ."' name='". $row_indicado['name'] ."'>". $row_indicado['name'] ."</input>";

                                    echo "</div>";
                                }
                            echo "</div>";
                        }

                        echo "</section>";
                    }
                ?>

                
            </form>
        </main>

        <script type="text/javascript" src="./assets/js/categorias.js"></script>
    </body>
</html>