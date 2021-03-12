<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16</title>
</head>
<body>
    <?php 
/* 25 funções em PHP*/

    /*1.printf 
     function () {
         $prod ="Leite";
         $preco = 4.5;
         printf ("0 %s está custando R$.2f", $prod , $preco);
        }
            - %d valor decimal (positivo ou negativo);
            - %u valor decimal sem sinal (apenas positivos);
            - %f valor real;
        */
     /* 2. print_r() mostra detalhes como num  array
            $x[0]=4;
            $x[1]=3;
            $x[2]=8;
            print_r ($x);

            //or 
            echo "<br/>";
            $x2 = array (3,2,1,5,6,4,7,8,9);
            print_r ($x2);
        */
    /* 2.1 var_dump() = mostra posição e o tipo dos dados
            echo "<br/>";
            $x2 = array (3,2,1,5,6,4,7,8,9);
            var_dump ($x2);
        */

    /* 2.2 var_export();  mostra posição do dado em um array 
            echo "<br/>";
            $x2 = array (3,2,1,5,6,4,7,8,9);
            var_export ($x2);
        */
    /* 3. wordwrap = quebras de linhas do texto grande se precisar colocar um monte de \n e <br/> 
            $txt = "este é um exemplo de uma string gigante que ocupa um mega espaço na memoria";
            $res = wordwrap($txt,20,"<br/>",false);
        echo ($res);
        */
    /* 4. strlen = numero de caracteres de uma string , o cmprimento
            $txt = "Curso em video";
             $tamanho = strlen ($txt);
        */
    /* 5. trim = recorda string, tirando os espaços antes e depois da palavra
            $nome="xxxJoséxdaxSilvaxxx";
            echo (strlen($nome)); = 19
            $novo = trim ($nome);
            echo ($novo); 
            echo (strlen($novo)); = 13
        */
    /* 6.ltrim = elimina os espaços apenas do incio 
            $nome="xxxJoséxdaxSilvaxxx";
            echo (strlen($nome)); 
            $novo = ltrim ($nome);
        */
    /* 7.rtrim = elimina os espaços apenas do final 
            $nome="xxxJoséxdaxSilvaxxx";
            echo (strlen($nome)); 
            $novo = rtrim ($nome);
        */
    /*8. str_word_count = numero da letras que existe dentro de uma string
            $frase="Eu vou estudar php agora";
            $cont = str_word_count($frase,0);
            print $cont;

        //0 = mostra a quantidade de palavras
        //1 = cria um array
        //2 = cria um array colando uma letra em cada posição
        */
    /* 9. explode = separa a string dentro de posições em um vetor de acordo com o caracter escolhido na função neste caso é o espaço
            $site = "Curso em Video";
            $vetor=explode(" ",$site);
            print_r($site);
        */

    /*10.  str_split = irá mostar cada letra em um indice separado
            $nome = "Maria";
            $vetor = str_split ($nome);
            print_r($vetor);
    */
    /*11. implode = irá juntar as palavra colcando # entre as palavra:
            $vetor [0] ="Curso";
            $vetor [1] = "em";
            $vetor [2] = "video";
            $texto = implode ("#", $vetor);

        or 
            pode utilizar join  ()
            $vetor [0] ="Curso";
            $vetor [1] = "em";
            $vetor [2] = "video";
            $texto = join ("#", $vetor);
        */
    /* 12. chr = mostra os código das letras no teclado:
        $letra =chr(67);
        echo "Aletra de codigo 67 é : $letra";
        */
    /* 13. ord = mostrar código da letra no teclado;
          $letra = ord(c) c;
          echo "O codigo da c é : $letra ";*/
          
    ?>
</body>
</html>