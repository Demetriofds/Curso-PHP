<div class="titulo">Operador Swicth</div>

<?php
$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria==='SUV') {
    $carro = 'Renegade';
    $preco = 80000;
}  elseif($categoria==='Sedan') {
    $carro = 'Etios';
    $preco = 55000;
}else{
    $carro = 'Mobi';
    $preco = 33000;
}
$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";


$categoria = 'aaa';
switch (strtolower($categoria)) { // Quando usar strtolower no switch quer dizer que dentro do case se pode trabalhar com todas as letras minusculas
    case 'luxo': //exemplo o luxo, suv ou o sedan
        $carro = 'Mercedes';
        $preco = 250000;
    break;
    case 'suv':
    case 'suv Básico':
        $carro = 'Renegade';
        $preco = 80000;
    break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
    break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
    break;
}
$precoFormatado = number_format($preco, 2, ',','.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";
