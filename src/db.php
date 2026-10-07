<?php

try {
    $pdo = new PDO(
        "mysql:host=db;dbname=loja;charset=utf8mb4",
        "root", "root"
    );
    echo "Conectou";
} catch (PDOExpection $e) {
    echo "Erro: ". $e->getMessage();
};

?>