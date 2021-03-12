<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
    <body>
        <?php
            /* REPETIÇÃO COM VARIAVEL DE CONTROLE */

            /* for ($c=1; $c<=10; $c++){
                echo $c;
            }
            */

            for ($i=0;$i<=10;$i++){
                echo "\n $i";
            }
                echo "<br/>";

            for ($i=10; $i>=0;$i--){
                    echo "\n $i";
            }

            echo "<br/>";

            for ($i=1; $i<=100;$i+=5){
                echo "\n $i";
            }
            
            echo "<br/>";

            for ($i=20; $i>=10;$i-=2){
                echo "\n $i";
            }
            
            echo "<br/>";

            /*Exercicios 1*/

            $n = isset($_GET["num"])?$_GET["num"]:8;
            for ($c=1;$c<=10;$c++){
                    $r = $n*$c;
                    echo "$n x $c = $r <br/>";
            }
        ?>
        <a href="aula13.html"> Voltar </a>
    </body>
</html>