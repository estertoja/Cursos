<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 </title>
</head>
    <body>
        <?php
           
            $a = 1;
                echo "<br> A = $a";
            $b = 3;
                echo "<br> B = $b";
            $c = $a + $b;
                echo "<br> Soma = C = $c";
            $c = $c + 5;
                echo "<br> Soma C += $c"; /*or*/
            $c += 5;
                echo "<br> Soma += C = $c"; 
            $b += 5;
                echo "<br> Soma B = $b"; 

                echo "</br> </br>";
                echo "<b> <br> INCREMENTAL";
            $a++;
                echo "<br> a++ =  $a";
            $b++;
                echo "<br> b++ = $b";
            $c++;
                echo "<br> c++ = $c";
            $a--;
                echo "<br> a-- = $a";
            $b--;
                echo "<br> b-- = $b";
            $c--;
                echo "<br> c-- = $c";

                echo "</br> </br>";
                echo "<b> <br>OPERADORES DE ATRIBUIÇÃO";
            $a+=$b;
                echo "<br>soma $a";
            $a-=$b;
                echo "<br>sub $a";
            $a*=$b;
                echo "<br>multi $a";
            $a/=$b;
                echo "<br>divi $a";
            $a%=$b; 
                echo "<br>modulo $a";
            $a.=$b;
                echo "<br>concatenação $a";


                echo "</br> PRODUTO </br>";
            $preco_produto = 10.00;
                echo "<br> Produto = R$  $preco_produto";
            $preco_produto = ($preco_produto + (($preco_produto*10)/100));
            echo "<br> Produto +10% = R$".number_format($preco_produto, 2);
            $preco_produto = ($preco_produto - (($preco_produto*10)/100));
            echo "<br> Produto -10% = R$".number_format($preco_produto, 2);

                echo " PRÉ E PÓS INCREMENTO";
            $z=29;
                echo "</br>Z = $z</br>";
            $y=45;
                echo "</br> y = $y</br>";
                echo "</br> PRÉ primeiro mostra depois decrementa ou incrementa ";
            ++$z;
                echo "<br> $z ";
            $z++;
                echo "<br> $z ";
                echo "</br> POS ";
            ++$y;
                echo "<br> $z";
            $y++;
                echo "<br> $z ";

            echo "</br> </br>EXECIOCIO";
            $atual = 2020;
            echo "<br> O ano atual =  $atual" ;

            echo "</br> </br>Variaveis referenciadas";
            $t = 3;
            $x =$t;
            $x +=5;
            echo "</br>$t";
            echo " </br>$x";
            /*or*/
            $w = 3;
            $h =&$w;/* a variavel w está referenciada na veriavel h sendo assim tudo que acontecer com a variavel h acontece com o w, dado que elas ligadas pelo endereço de memoria*/
            $h+=5;
            echo "</br>$w";
            echo "</br>$h";
            
            echo "</br>VARIAVEIS DE VARIAVEIS";
            $site ="</br>cursoemvideo";
            $$site="</br>cursoemPHP"; /* com os dois cifrões , cursoemvideo passa a ser uma variavel rebendo os dados do cursoPHP*/
            echo "</br> $site";
            echo "</br> $cursoemvideo";
        ?>
    </body>
</html>