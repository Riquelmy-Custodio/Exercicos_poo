<?php
class  Livro{
   

    public function __construct($valor1, $valor2, $valor3, $valor4 = "Desconhecido"){
    $this->titulo = $valor1;
    $this->autor = $valor2;
    $this->pags = $valor1;
    $this->anodata = $valor4;
    }

    public function exibirDetalhes(){
        echo "Titulo: " . $this->titulo . ", Autor: " . $this->autor . ", Paginas: " .  $this->pags . ", Publicado em: " . $this-> anodata;    
    }

    }
$livro = new Livro('Memorias Postumas', 'Machado de Assis',200);
$livro->exibirDetalhes();
?>