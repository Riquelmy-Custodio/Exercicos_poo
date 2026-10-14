<?php
class ContaBancaria{
    public string $titular;
    public float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }
    public function exibirSaldo(){
        echo "Titular: " . $this->titular ." | - Saldo atual: R$ " . number_format($this->saldo, 2, ",", ".");
    }
}

$conta = new ContaBancaria("Duda", 500);

$conta->depositar(200);
$conta->sacar(100);
$conta->exibirSaldo();

?>