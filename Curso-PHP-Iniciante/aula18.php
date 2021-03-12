<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Aula 18
    </title>
</head>
<body>
    <pre>    
    <?php
    /* COMO UTLIZAR MATRIZES E VETORES EM PHP */
        $n = array(3,5,8,2);
        print_r($n);
        
    /* RANGE pode ser utilizada no lugar da palavra "array" porem com em baixo ele terá quatro posições sendo preenchidas por (5,10,15,20). O primeiro numero é o inicial e o segundo o final e  ultimo o numero de passos. */
        $c = range (5,20,5);
    foreach ($c as $valor){ // para cada  
        echo "$valor";
    }
    /* eu posso personalizar os indices , indicando em qual quero que ele esteja colocado*/
            $j = array ( 9 => 3,
                         3 => 5,
                         7 => 8,
                         5 => 2);
            print_r($j);

    /* se eu quiser adicionar um novo membro ao vetor é só atribuir */

    $j[] = 45;
    /* adicionara mais um indice no vetor*/

    unset ($j[9]); // desaloca a o espaço de memoria ;

    /* Posso criar um array em que os dados não são homogeneos:*/
        $k = array ("nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5);
                    print_r($k);

    /*MATRIZ EM PHP*/
    $n = array (array (2,3),
                array (3,4),
                array (9,5));
                $n[2][0] = $n [1][1];
    ?>
    </pre>
</body>
</html>