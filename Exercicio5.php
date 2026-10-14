<?php
class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
    public function vender($quantidade){
        if($quantidade > $this->estoque){
            echo"Não é possivel realizar a compra!(Estoque insuficiente)";
        }else{
            $this->estoque -= $quantidade;
            echo "<br>Venda de " . $quantidade .
            " unidades de " . $this->nome . " realizado com sucesso!<br>";
        }
    }

    public function reajustarPreco($percentual){
        if($percentual < 0){
            echo "Não é possivel alterar o preço com esse valor";
        }else{
            $this->preco = $this->preco + ($this->preco * ($percentual / 100));
        }
    }

    public function exibirInfo(){
        echo $this->nome . "-->" .
        "R$". $this->preco. " Estoque: " . $this->estoque;
    }
}

$Pessoa1 = new Produto('Mouse Gamer' , 50, 30);

$Pessoa1->exibirInfo();

$Pessoa1->vender(10);

$Pessoa1->reajustarPreco(10);

$Pessoa1->exibirInfo();
?>