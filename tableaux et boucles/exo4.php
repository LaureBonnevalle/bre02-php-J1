<?php
$users = [
    ["firstName" => "Mari","lastName" => "Doucet"], 
    ["firstName" => "Hughes", "lastName" => "Forger"]
];

foreach($users as $user) {
    echo $user["firstName"]." ".$user["lastName"]."</br>";
}
echo "</br";



?>