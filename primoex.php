<?php

/*Isso é só pra iniciar*/

function numerosprimos($num)
{

    if ($num < 2) 
    {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) 
    {
        if ($num % $i == 0)
        {
            return false;
        }
    }
    
    return true;

}

/*Inicio do programa*/

while (true)
{

    readline("Digite um numero: ");
    $input = trim(fgets(STDIN));
    
    if (!is_numeric($input)) 
    {
        readline("Por favor, digite um numero válido");
        continue;
    }

    $num = intval($input);

    if ($num < 2)
    {
        readline("Programa encerrado");
        break;
    }
    
    if (numerosprimos($num))
    {
        readline("$num e um numero primo");
    } else

    {
         readline("$num nao e um numero primo");
    }

}