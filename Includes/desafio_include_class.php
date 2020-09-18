<div class="titulo">desafio Include Class</div>

<?php
//ini_set("display_errors",1);
require('class-usuario.php');


$usuario = new Usuario('Demétrio Silva', 50, 'dema');
echo $usuario->apresentar();
unset($usuario);