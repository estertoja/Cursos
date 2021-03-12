<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14</title>
</head>
<body>
    <?php
        /* COMO CRIAR ROTINAS EM PHP*/

        /* function soma($a,$b) {
            $s=$a+$b;
            echo $s;
        }
        soma(3,4);
        */
        
        /*function soma ($a,$b){
            $s=$a + $b;
            echo "<br/> A soma vale $s";
        }
        soma (3,4);
        soma (8,2);
        $x=9;
        $y=15;
        soma($x,$y);
        */

       /* function soma ($a,$b){
            return $a+$b;
        }
        $res= soma (3,4);
        echo "A soma é $res";
        */
        // no caso de uma função ter vários parametros:
        function soma (){
            $p= func_get_args(); //essa função pega todos os valores e coloca dentro de um vetor p;
            $tam = func_num_args();// irá retornar o numero de argumenos passados por argumentos;

            $s=0;
            for($i=0;$i<$tam;$i++){
                $s=$s+$p[$i];
            }
            return $s;
        }
        $res = soma (3,4,8,1,2);
        echo "A soma é $res ";
    ?>
    
</body>
</html>