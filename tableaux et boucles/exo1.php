<?php
$animals = ["chat", "chien", "lapin", "souris"];
foreach($animals as $animal) {
    echo "$animal"."</br>";
}

for ($i=0; $i< count($animals); $i++) {
    echo "$animals[$i]\n"."</br>";
}

?>