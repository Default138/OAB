<?php

function divisaoExata($dividendo, $divisor)
{
    return ($dividendo % $divisor == 0);
}

$num = 2;
while($num > 1)
{

    $num = readline("informe um numero:");

    for($i=$num/2     ; $i>0; $i--)
    {
        if(divisaoExata($num, $i))
         {
            if($i == 1)
                echo $i . "\n";
            else
                echo $i . " , ";
         }
    }
}