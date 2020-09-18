<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = '01';
    public $mes = '01';
    public $ano = '1970';

    function apresentar() {
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}
$dt = new Data();
$dt->dia = 1;
$dt->mes = 1;
$dt->ano = 1970;
echo $dt->apresentar(),'<br>';

$aniversario = new Data();
$aniversario->dia = 07;
$aniversario->mes = 10;
$aniversario->ano = 1969;
echo $aniversario->apresentar();
