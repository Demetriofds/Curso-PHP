<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="titulo">Desafio Tabela #02</div>

<h2>Cadastro</h2>
<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
                id="nome" name="nome" placeholder="Nome">
                value="<?= $_POST['nome']; ?>"
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control"
                id="nascimento" name="Nascimento" placeholder="Nascimento">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control"
                id="email" name="email" placeholder="e-mail">
        </div>
        <div class="form-group col-md-6">
            <label for="nascimento">Site</label>
            <input type="text" class="form-control"
                id="site" name="site" placeholder="Site">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de filhos</label>
            <input type="text" class="form-control"
                id="filhos" name="filhos" placeholder="Qtde de filhos">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
                id="salario" name="salario" placeholder="Salário">
        </div>
    </div>
        <button class="btn btn-primary">Enviar</button>
</form>

<?php

?>

<style>
    form > * {
        font-size: 1.5rem;
    }
</style>