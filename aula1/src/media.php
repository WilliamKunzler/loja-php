<form method='post'>
    <input  name="nota1" placeholder="Nota 1">
    <input  name="nota2" placeholder="Nota 2">
    <button>Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $media = ($nota1 + $nota2) / 2;
    if ($media < 7 && $media >= 0) {
        echo "Reprovado";
    } elseif ($media >= 7 && $media <= 10) {
        echo "Aprovado";
    } else {
        echo "Inválido";
    }
}

?>