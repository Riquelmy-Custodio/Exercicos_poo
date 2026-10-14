<?php

class Carro {
   
    private $modelo;
    private $consumo;
    private $tanque;

   
    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

   
    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecidos {$litros} litro(s) no {$this->modelo}.<br>";
        } else {
            echo "Erro: A quantidade deve ser maior que zero.<br>";
        }
    }

   
    public function dirigir($km) {
        $necessario = $km / $this->consumo;

        if ($necessario <= $this->tanque) {
            $this->tanque -= $necessario;
            echo "O carro {$this->modelo} percorreu {$km} km e consumiu {$necessario} litros.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer {$km} km.<br>";
        }
    }

    public function exibirInfo() {
        echo "Modelo: {$this->modelo} | Consumo: {$this->consumo} km/L | Tanque: {$this->tanque} L<br>";
    }
}



$carro = new Carro("Lambo", 10, 25);
$carro->exibirInfo();
$carro->dirigir(500);
$carro->abastecer(15);
$carro->exibirInfo();

?>