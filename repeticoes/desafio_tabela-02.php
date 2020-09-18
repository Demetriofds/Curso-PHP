<div class="titulo">Desafio Tabela #02</div>

<form action="#" method="POST">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" value=<?= $_POST['linhas'] ?? 10 ?> name="linhas" id="linhas">
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" value=<?= $_POST['colunas'] ?? 10 ?> name="colunas" id="colunas">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
        $linhas = intval($_POST['linhas']);
        $colunas = intval($_POST['colunas']);

        $num = 1;

        if(!$linhas) $linhas = 10;
        if(!$colunas) $colunas = 10;

        for($i = 0; $i < $linhas; $i++){
            echo "<tr>";
            for($j = 0; $j < $colunas; $j++){
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }
    ?>
</table>

<style>
    form * {
        font-size: 1.5rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    table {/* corpo tabela */
        border: 2px solid #444;
        border-collapse: collapse;
        margin: 20px 10px;
        float: left;
    }
    table thead th { /* cabeçalho */
        background-color: #DBDBDB;
        border: 2px solid #444;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {/* linhas */
        border: 1px solid #444;
        padding: 10px 30px;
    }
    </style>