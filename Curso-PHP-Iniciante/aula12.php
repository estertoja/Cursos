<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>
</head>
<body>
    <?php
         /* REPETIÇÃO COM TESTE LÓGICO NO FINAL*/
         /* é executado no minimo uma vez antes que realizar o teste
          $c =1;
            do {
                echo $c;
                $c ++;
            } while ($c<=10)
        */

        $c =1;
        do{
            echo $c;
            $c++;
        }  while ($c<=10);    
        $c =10;
        do{
            echo $c;
            $c--;
        }  while ($c>0);
        
     ?>
    
</body>
</html>