<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10</title>
</head>
<body>
    <?php
        /*Condicional Multiplos Casos*/
        /* switch ($po) {
            case 1:
                echo "a";
                break;
            case 2:
                echo "b";
                break;
            default;
                echo "Erro";
            }
        */

        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        $r=0;
        switch($o){
            case 1: 
                $r = $n*2;
                break;
            case 2: 
                $r = pow($n,3);
                break;
            case 3:
                $r = sqrt($n); //or $n ^0.5
            break;
        }

        echo "Resultado = $r "
    ?>

    <a href="aula10.html"/> Voltar </a>
</body>
</html>