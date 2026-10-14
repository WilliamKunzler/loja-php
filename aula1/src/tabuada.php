<form method='post'>
    <input  name="numero" placeholder="aqui numero">
    <button>Enviar</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $numero = $_POST["numero"];
    for ($i=1; $i <= 10; $i++) { 
        echo "$i x $numero = ". $i *$numero."<br>";
    }
}

?>