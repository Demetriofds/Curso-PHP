<div class="titulo">Argumentos & Retornos</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem(); // não mostra nada porque precisa de um echo
$mensagem = obterMensagem(); // armazenando na variavel
echo $mensagem;
echo '<br>', obterMensagem(); // diretamente com echo
echo '<br>';
var_dump(obterMensagem()); // mostra quantos caracteres tem na frase

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}


echo '<br>', obterMensagemComNome("Demétrio Silva");
echo '<br>', obterMensagemComNome("Ana Luisa Silva");



function soma($a, $b) {
    return $a + $b;
}

echo '<br>', soma(4, 5);
echo '<br>', soma(45, 78);

echo '<hr>';
$x = 10;
$y = 20;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

echo '<hr>';
function trocaValorDeVerdade(&$a, $novoValor){ //passando a referencia
    $a = $novoValor;
}
trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;