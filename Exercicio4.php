<?php
class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentoSalario($percentual){
        if($percentual < 0){
            echo "Não é possivel aumentar o salário!(Apenas permitidos de 10 para baixo e acima de 0)";
        }elseif($percentual <= 10){
            $this->salario = $this->salario + ($this->salario * ($percentual / 100));
        }
    }

    public function ExibirDados(){
        echo "Nome: " . $this->nome .
        "<br>Salario: R$ " . $this->salario;
    }
}

$Pessoa1 = new Funcionario('Wellynghton' , 1000);

$Pessoa1->aumentoSalario(10);

$Pessoa1->ExibirDados();
?>