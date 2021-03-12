<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17</title>
</head>
<body>
    <?php
        /* 14. strtolower = letras minusculas
            $nome = "Gustavo Guanabara";
            $nome2= strtolower($nome);
            echo "Seu nome é $nome2;
        */

        /* 15. strtoupper = letras maisculas 
            $nome = "Gustavo Guanabara";
            $nome2= strtoupper($nome);
            echo "Seu nome é $nome2;

        /* 16. ucfirst = primeira letra em maisculas
            $nome = "Gustavo Guanabara";
            $nome2= ucfirst($nome);
             echo "Seu nome é $nome2;
             */
        /* 17.  uncwords = primeira letras das palavras serão maisculas
            $nome = "Gustavo Guanabara";
            $nome2= uncwords($nome);
             echo "Seu nome é $nome2;
        
         /* 18 .strrev = o nome ao contrário;
            $nome = "Gustavo Guanabara";
            $nome2= strrev($nome);
             echo "Seu nome é $nome2;

        /* 19. strpos = mostra a posição que se encontra uma palavra no vetor de strinf.
            $frase "Estou aprendendo PHP;
            $pos= strpos($frase , "PHP");
            echo "a string foi encontrada na posição $pos"; 
            */
        /* 20. stripos = mostra a posição que se encontra uma palavra no vetor de strinf indiferente se está maisculo ou minuscula a letra.
            $frase "Estou aprendendo PHP;
            $pos= stripos($frase , "PHP");
            echo "a string foi encontrada na posição $pos"; 
        */
        /* 21. substr_count = mostra quantas vezes encontramos isso numa string;
        $frase = "Estou aprendendo PHP no curso em video PHP";
        $cout = substr_count($frase, "PHP");
        print("PHP encontrado $cont vezes");
        */

        /* 22. substr = a string sub irá receber um apenas as letras que forem determinas na função, criando uma subpalavra;

        $site = "Curso em video";
        $sub = substr($site, 0,5);
        echo "$sub";
        */

        /*23. str_pad = coloca espacos ou o caracter desejdo entre uma string determinando o espaço;
            $nome = "Guanabara";
            $novo = str_pad ($nome, 30,"",STR_PAD_RIGHT);
             - STR_PAD_LEFT = esquerda
             - STR_PAD_RIGHT = direita
             - STR_PAD_CENTER = no centro
            */

        /* 24. str_repeat = repete uma string várias vezes
            $txt=str_repeat ("PHP",5);
            print ("O texto gerado foi $txt");

        /*25. str_replace = subistitui a palavra de acordo com a determinada dentro de uma string;
            $frase = "Gosto de matemática ";
            $novaFrase = str_replace = ("matematica", "PHP" , $frase);
            echo "$novaFrase";
           
           or

        str_ireplace = subistitui a palavra de acordo com a determinada dentro de uma string idenpendente se é maisculo ou minusculo;
            $frase = "Gosto de matemática ";
            $novaFrase = str_ireplace = ("matematica", "PHP" , $frase);
            echo "$novaFrase";
            */
   ?>
</body>
</html>