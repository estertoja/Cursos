<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
</head>
<body>
    <?php

        /*PASSAGEM POR VALOR*/
        /*function teste ($x){
            $x+=2;
            echo $x;
        }

        $a=3;
        teste($a);
        echo "<br/>";
        echo $a;
        */

        /*PASSAGEM POR REFERENCIA*/
       /* function teste (&$x) {
            $x=$x+2;
            echo $x;
        }
        $a =3;
        teste ($a);
        echo "<br/>";
        echo $a;
        */

        /* adicionar um arquivo de php separado  COMANDO INCLCUDE =incluir
        include "aula15-1.php";
        echo "<h1> Testando novas funções </h1>";
        Ola ();
        mostraValor(4);
        echo "<h2> Finalizando Programa... </h2>";*/


        /* adicionar um arquivo de php separado  COMANDO REQUIRED = requerido */
        require "aula15-1.php";
        echo "<h1> Testando novas funções </h1>";
        Ola ();
        mostraValor(4);
        echo "<h2> Finalizando Programa... </h2>";


        /* include a função é incluida no programa não depenendo dela para processeguir com o processameno */
        /* require a função é requerida no programa dependendo dela para processeguir com o processamento*/
        /*include_once a função é incluida apenas uma vez mesmo sendo chamada outrasvezes no programa */
        /*require_onde a função é requirida apenas uma vez mesmo sendo chamada outras vezes no programa */
    ?>
</body>
</html>