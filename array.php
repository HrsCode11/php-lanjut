<?php

$data = [
    "Miya" => 27,
    "Gusion" => 34,
    "Lancelot" => 49,
    "Rafaela" => 22,
    "Johnson" => 45,
    "Estes" => 38,
    "Khufra" => 24,
    "Claude" => 29,
    "Fanny" => 40,
    "Hayabusa" => 31,
    "Balmond" => 21,
    "Chou" => 48,
    "Franco" => 36,
    "Selena" => 23,
    "Grock" => 42
];


$jsonData = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>";
print_r($jsonData);
echo "</pre>";
