<div class="titulo">Métodos Mágicos</div>

<?php
class pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'construtor Invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo '<br>E Morreu!';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }
    public function __get($atrib){
        echo "Lendo atributo não declarado __get : {$atrib}<br>";
    }
    public function __set($atrib, $valor) {
        echo "Alterarando o valor  atrib não declarado com __set {$atrib} / {$valor}";
    }
    public function _call($metodo, $params) {
        echo "Tentando executar método __call '${metodo}'";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Demétrio', 50); // __construct
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<br>';// chamando o __toString
echo '<br>';
$pessoa->nome = 'Ana';
$pessoa->apresentar(); // chamando o método diretamente sem o __call

$pessoa->nomeCompleto = 'Muito Legal !!!<br>'; // __set
$pessoa->nomeCompleto; // __get
echo $pessoa->nome; // acessa o atributo diretamente sem __get

$pessoa->exec(1, 'teste', true, [1, 2, 3]); // __call
$pessoa = null; // __destruct