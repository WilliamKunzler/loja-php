<?php
$frutas = ["banana", "maça", "uva"];

array_push($frutas, "Manga");
array_unshift($frutas, "Abacaxi");

foreach ($frutas as $f => $fruta) {
    echo "$f - ". strtoupper($fruta) ." <br> ";
};

$produto = ["nome" => "camiseta", "preço" => 49.90];
echo $produto["nome"];

