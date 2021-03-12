<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 04</title>
    <link rel= "stylesheet" href="_css/estilo.css"/>
</head>
<body>
    <div id = interface>
        <?php
            $idade =  21;
            $nome = "Ester"; /* aspas duplas*/
            echo $nome." tem ".$idade." anos !" ; /*outro modo*/ 
            echo "$nome tem $idade anos !"; /*aspas duplas ou não haverá interpretação das variaveis*/
            /*php é sensitve a letras maisculas e minusculas*/
        ?> 
        <footer id ="rodape">
                 <p> Copyright &copy; 2020 - by <a href="https://www.linkedin.com/in/ester-toja-692a6566/"    target="_blank"> Ester Toja </a> </p>
        </footer>
    </div>
</body>
</html>