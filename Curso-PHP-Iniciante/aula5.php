<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritmétricos</title>
    <link rel= "stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div id = interface>
        <?php
            $n1 = 3;
            $n2 = 2;
            $n3 = 3.99999;
            $soma= $n1+$n2;
            echo "<h1> Soma : $n1 + $n2 = ";
            echo " $soma</h1>";

            $sub = $n1-$n2;
            echo "<h1> Subtração: $n1 - $n2 = ";
            echo "$sub </h1>";
        
            $div = $n1/$n2;
            echo "<h1> Divisão: $n1 / $n2 = ";
            echo "$div </h1>";

            $mul = $n1*$n2;
            echo "<h1> Multiplicação: $n1 * $n2 = ";
            echo "$mul </h1>";

            $parentese = $n1-($n1*($n1/(($n2+$n1)*$n2)));
            echo "<h1> Parentese: ($n1*($n1/(($n2+$n1)*$n2))) = ";
            echo "$parentese </h1>";     

            /* Funções matemáticas para pegar valores absolutos*/
            /* abs = abs() - valor absolutos = eliminar o sinal negativo */
            $abs = -5;
            echo "<h1> Abs: abs($abs) = ".abs($abs)."</h1>";
            /* pow () = pow () - potenciação*/
            echo "<h1>Pow: pow($n1<sup>$n2</sup>)=".pow($n1,$n2)."</h1>";
            /*sqrt ()=  raiz quadrada*/
            echo "<h1>Sqrt: sqrt($n1) = ".sqrt($n1)."</h1>";
            /* round() = arredondamento e pode ser usado para arrendodamento as da mesma forma o "ceil" e o "floor" */
            echo "<h1> Round: round($n3) = ".round($n3)."</h1>";
            /*intval() = valor inteiro da variavel*/
            echo "<h1> Intval: intval($n3) = ".intval($n3)."</h1>";
            /*number format() = formatação*/
            echo "<h1> Number Fomart: number fomart($n3) R$ = ".number_format($n3,2)."</h1>"; 
            /* colocar a vircula*/
            echo "<h1> Number Fomart: number fomart($n3) R$ = ".number_format ( $n3,2,",")."</h1>"; 


        ?> 
        <footer id ="rodape">
                 <p> Copyright &copy; 2020 - by <a href="https://www.linkedin.com/in/ester-toja-692a6566/"    target="_blank"> Ester Toja </a> </p>
        </footer>
    </div>
</body>
</html>