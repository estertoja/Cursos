<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9</title>
</head>
<body>
    <?php
    /*Estrutura Condicional If*/
    /* Comando
    if (condição){
        comando.. 
    } else {
        comando.. 
    }
    
    if ($dade>=18){
        $votar=true;
    } else {
        $votar=false;
    }
    echo $votar;
*/
    $a = isset ($_GET['ano'])?$_GET['ano']:1900;
    $i = date ("Y") - $a;
    echo "Você nasceu no ano $a e tem $i anos";

    if ($i>=18){
        $v = "pode votar";
        $d = "pode dirigir";
    }else {
        $v = "não pode votar";
        $d = "não pode dirigir";
    }

    echo "Você $v e $d";

    /* Condições compostas 
    if (condição){
        comando....
    }else if (condição){
        comando.....
    }else {
        comando ...
    }
    */
 
    echo "\n \n \n \n \n\ \n \n \n  Exercicio 2";
    if ($i<16){
        $tipoVoto = "não vota";
    } else if (($i>=16 && $i<19)|| ($i>65)){
        $tipoVoto=" \n voto opcional";
    }else {
        $tipoVoto = " \n voto obrigatório";
    }

     echo $tipoVoto;
    ?> 
    <br/>
    <a href="aula9.html">Voltar</a>


</body>
</html>