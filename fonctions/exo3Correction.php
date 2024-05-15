<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

function isOdd(int $number) : bool
{
    if($number % 2 === 0)
    {
        return false;
    }

    return true;
}

echo isOdd(12) . "-<br>"; // doit afficher 0 ou false
echo isOdd(29) . "-<br>"; // doit afficher 1 ou true
