<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8-1</title>
</head>
<body>
    <?php
    $nome = isset( $_GET["nome"])? $_GET["nome"]:"Não Informado";
    /*isset= se foi configurado */
    $ano = isset ( $_GET["ano"])?  $_GET["ano"]:
    "Não Informado";
    $sexo = isset ($_GET["sexo"])?$_GET["sexo"]:
    "Não Informado";
    $idade = date("Y")-$ano;
    /* a função date tras o ano atual
    utilizando o
     Y maiusculo = 2020
     y minusculo = 20*/
     echo "$nome é $sexo e tem  $idade anos";
?>
<a href="aula8-1.html"> Voltar </a>
</body>
</html>