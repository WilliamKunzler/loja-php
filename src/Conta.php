<?php
class Conta {
  public function __construct(private Cliente $titular, private float $saldo = 0) {
    if ($saldo < 0) throw new Exception("Saldo inicial negativo");
  }
  public function getTitular(): Cliente { return $this->titular; }
  public function getSaldo(): float { return $this->saldo; }

  public function depositar(float $valor): void {
    if ($valor <= 0) throw new Exception("Valor de depósito inválido");
    $this->saldo += $valor;
  }
  public function sacar(float $valor): void {
    if ($valor <= 0) throw new Exception("Valor de saque inválido");
    if ($valor > $this->saldo) throw new Exception("Saldo insuficiente");
    $this->saldo -= $valor;
  }
}
