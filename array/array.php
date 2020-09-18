<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3, 4.4, "Demétrio");
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[4];
echo '<br>';
var_dump($lista[10]); // nulo

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; //se tiver acento ele conta 2 casas
