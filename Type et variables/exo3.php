<?php

$animal = array ('espece'=> 'chat', 'nom'=> 'felix', 'age' => 33 );
print_r ($animal);
echo "</br>";
$animals = ['espece' => "chat",
            'nom'=> "felix",
            'age'=> 5];

print_r ($animals);
echo "</br>";

echo "L'animal est un ".$animals["espece"]." repondant au nom de ".$animals["nom"]." et agé de ".$animal["age"]." ans.";
echo "</br>";

echo $animals["age"]." ans";
echo "</br>";
echo "{$animals["age"]} ans";
?>

