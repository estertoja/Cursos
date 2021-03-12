<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19</title>
</head>
<body>
<pre>
    <?php
        /* FUNÇÕES EM VETORES */

        // aribuição de matrizes 
        /*1**/ $m = array (0=>3, 1=>5, 2=>8, 3=>2);
        /*2**/ $o = array (3,
                    5,
                    8,
                    2);
            echo "Matriz m = ";
        foreach ($m as $valor){
            echo " $valor ";
        }
        echo "<br/> ";
            echo "Matriz o =";
        foreach ($o as $valor){
            echo " $valor ";
        }

        /*funções */
        /* 1 print_r (vetor/matriz) = mostra qualquer objeto*/
        echo "<br/> mostrar pelo print_r ";
        echo "<br/> ";
        $y = array ("A","J","M","X","K");
        print_r($y);
        /*2. var_dump = faz a mesma coisa que a anterior mostrando mais detalhes como tipo e outros...*/
        echo "<br/> mostrar pelo var_dump";
        echo "<br/> ";
        $l = array ("B","G","N","O","P");
        var_dump($l);
        /*3. count((vetor/matriz) ) = Contar os itens ;*/
        echo "<br/> contar itens";
        echo "<br/> ";
       // $l = array ("B","G","N","O","P");
            count($l);
        /*4. Para adicionar um elemento ao fim da matriz*/
            echo "<br/> Adicionando item no final da matriz: $ f [] ;";
            echo "<br/> ";
            $f = array ("T","K","J","S","A");
            print_r($f);
        //--> 
            $f[] ="O";
            print_r($f);
        // or pode ser feita pela função array_push(vetor/matriz) 
            echo "Adicionar elemento no final array_push";
            echo "<br/> ";
            array_push($f, "9");
            print_r($f);
        /* 5.array_pop (vetor/matriz)= Para excluir o ultimo elemento da matriz*/
            echo "Excluir o elemento no final array_pop";
            echo "<br/> ";
            array_pop($f);
            print_r($f);
        /*6.  array_unshift(vetor/matriz,item a ser retirado);adicionar um elemento no inicio elemento do matriz e vetor */
            echo "Adicionar o elemento no inicio array_unshift";
            echo "<br/> ";
            array_unshift($f,7);
            print_r($f);
        /* 7. array_shift (vetor) = excluir um elemento no inicio do elemento do matriz e vetor */
            echo "Excluir o elemento no inicio array_shift";
            echo "<br/> ";
            array_shift ($f);
            print_r($f);
        /*ORDENANDO VETORES =*/
            $t = array ("6","4","8","0","8", "5","9");
            echo "<br/>";
        /* 8. sort(vetor/matriz)= crescente;*/
                echo "<br/>";
                echo "A ordenando crescennte pelo sort()";
                echo "<br/>";
                print_r($t);
                sort($t);
                print_r($t);
        /* 9. rsort(vetor/matriz)= decrescente;*/
                echo "<br/>";
                echo "A ordenando descrecente pelo rsort()";
                echo "<br/>";
                rsort($t);
                print_r($t);
        /* 10. asort(vetor/matriz) = modifica os indices para que fiquem de acordo com a ordem dos vetores;*/
        echo "<br/>";
        echo "A ordenando os valos e indices asort()";
                print_r($t);
                asort($t);
                print_r($t);
        /* 11. arsort(vetor/matriz) = modifica os indices para que fiquem de acordo com a ordem descrescente dos vetores;*/
        echo "<br/>";
        echo "A ordenando descrecente os valos e indices asort()";
                print_r($t);
                arsort($t);
                print_r($t);
        /* 12. ksort (vetor/matriz) Ordenação por chaves: ordenando os indices ;*/
        echo "<br/>";
        echo "A ordenando apenas os indices ksort()";
                ksort($t);
                print_r($t);
        /* 13. krsort (vetor/matriz) Ordenação por chaves: ordenando descrescente os indices ;*/
        echo "<br/>";
        echo "A ordenando descrecente apenas os indices ksort()";
                krsort($t);
                print_r($t);

        ?>
</pre>
</body>
</html>