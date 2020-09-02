<?php

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"]; 

var_dump($klas);

for ($i = 0; $i < count($klas); $i++) {
    echo $klas[$i].PHP_EOL;
}

foreach ($klas as $name) {
    echo $name.PHP_EOL;
}

$bucket_list = [];


$hoeveelheid_activiteiten = readline("hoeveel activiteiten wil je toevoegen aan je bucket list?");

for ($i = 0; $i < $hoeveelheid_activiteiten; $i++) {
    $bucket_list[$i] = readline("Welke activiteiten wil je toevoegen?");
}

var_dump($bucket_list);

foreach ($bucket_list as $item) {
    echo $item.PHP_EOL;
}