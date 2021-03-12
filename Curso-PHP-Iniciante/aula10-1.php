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
        /* switch ($op) {
            case 1:
            case 2:
            case 3:
                echo "tipo 1";
            break;
            case 4:
            case 5:
                echo "tipo 2";
            break;
            defauld
                echo "tipo 3";
            }
        */
    
        $d = isset ($_GET ["ds"])? $_GET["ds"]:0;

        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Dia de Aula";
            break;
            case 7;
            case 8;
                echo "Descansar";
            default: 
            echo "Dia da semana inválido";
        }

    ?>

    <a href="aula10-1.html"> Voltar </a>
    <!-- em javascript <a href="javascript:history.go(-1)" class="botão"> = serve para voltar uma página atrás do histórico de navegação-->
</body>
</html>