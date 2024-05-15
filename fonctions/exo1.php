<?php

$str1 = "je suis un chat ";
$str2 = "et j'ai faim";

function concat(string $str1, string $str2) : string {
    return $str1.$str2;
}
echo concat ("je suis ", "malade");

?>