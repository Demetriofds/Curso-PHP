<div class="titulo">Desafio Swicth</div>

<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="Cel-Fah">Celsios > Fahrenheit</option>
        <option value="Fah-Cel">Fahrenheit > Celsios</option>
    </select>
    <button>Calcular</button>
</form>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milhas";
    break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km(s)";
    break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
    break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
    break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
    break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
    break;
    default:
        $mensagem = "Nenhum valor Calculado";
}
echo "<p>$mensagem</p>";

?>
<style>
    form > * {
        font-size: 1.5rem;
    }
</style>

