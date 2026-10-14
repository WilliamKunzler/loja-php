<?php

require 'Carrinho.php';
require 'Produto.php';
require 'Cliente.php';
require 'Conta.php';

$cliente = new Cliente("William", "william@email.com");
echo "Cliente: {$cliente->getNome()} ({$cliente->getEmail()})<br>";

$cliente->setEmail("novo@email.com");
echo "Novo e-mail: {$cliente->getEmail()}<br>";

try {
  $cliente->setEmail("email-invalido");
} catch (Exception $e) {
  echo "Erro: {$e->getMessage()}<br>";
}
echo "E-mail continua: {$cliente->getEmail()}<br>";

$conta = new Conta($cliente, 100);
echo "<br>Saldo inicial: R$ {$conta->getSaldo()}<br>";

$conta->depositar(50);
echo "Após depositar 50: R$ {$conta->getSaldo()}<br>";

$conta->sacar(30);
echo "Após sacar 30: R$ {$conta->getSaldo()}<br>";

try {
  $conta->sacar(500);
} catch (Exception $e) {
  echo "Erro: {$e->getMessage()}<br>";
}
echo "Saldo final: R$ {$conta->getSaldo()}<br>";
