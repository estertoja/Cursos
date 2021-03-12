<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <?php
    echo "COMPARÇÕES EM PHP";
    
    echo "</br>Operadores Relacionais";
    echo "</br>Maior = a > b;";
    echo "</br>Menor = a < b";
    echo "</br>Maior igual = a >= b";
    echo "</br>Menor igual = a <= b";
    echo "</br>Dirente a != b OU a<>b";
    echo "</br>Igual a == b"; 
    echo "</br> Identico a === b"; /* se as veriaveis são iguais e do mesmo tipo*/
    $x = 3;
    $y="3";
    $result = ($x === $y)? "Sim": "Não";
    echo "</br>result = (x === y)? Sim: Não ";
    echo "</br>$result";


    echo "</br> </br> Valores:";
    $a = 15;
    echo "</br> a = $a";
    $b = 10;
    echo " </br> b = $b";

    echo "</br> </br>OPERADOR TERNÁRIO";
    echo "</br>expressão?verdadeiro:falso";
    echo "</br>maior = a>b? a : b";
    $maior = $a>$b? $a : $b;
    echo "</br>$maior";

    echo "</br>r = a>b ? a+b : a-b";
    $r = $a>$b? $a+$b : $a-$b;
    echo "</br>$r";

    $m = 10;
    $sit = $m>7? "</br>aprovado" : "</br>recuperação";
    echo "</br>Situação: $sit";

    echo "</br> </br>OPERADOR LOGICO";
    echo "</br> and = e = &&";
    echo "</br> or = ou = || ";
    echo "</br> xor = ou exclusivo = xor"; /* ou isso ou aquilo mas sempre tem algo*/
    echo "</br> not = não = !";

    $ano = 1998;
    $idade= 2020-$ano;
    echo "</br>Quem nasceu no ano $ano tem idade $idade";
    $tipo = ($idade>=18 &&  $idade<65)? "Obrigatório": "Não Obrigatório";
    echo " </br> O seu voto é $tipo";




    ?>
</body>
</html>