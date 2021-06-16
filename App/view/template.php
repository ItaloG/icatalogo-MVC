<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles-global.css" />
    <link rel="stylesheet" href="/CSS/produtos.css" />
    <link rel="stylesheet" href="/CSS/header.css">

    <title>Administrar Produtos</title>
</head>

<body>
    <?php
    include("../App/View/header.php");
    ?>
    <div class="content">

        <section class="produtos-container">

            <?php
            //verificar o $_SESSION
            if (isset($_SESSION["usuarioId"])) {
                //mostar os botoes somente caso o usuario esteja logado
            ?>
                <header>
                    <button onclick="javascript:window.location.href ='./novo/'">Novo Produto</button>
                    <button onclick="javascript:window.location.href ='../categorias'">Adicionar Categoria</button>
                </header>
            <?php
            }
            ?>

            <main>

                <?php require_once "../App/View/" . $view . ".php"; ?>

            </main>
        </section>
    </div>
    <footer>
        SENAI 2021 - Todos os direitos reservados
    </footer>
</body>
<script lang="javascript">
    function deletar(produtoId) {
        if (confirm("Deseja realmente excluir este produto?")) {
            document.querySelector('#produtoId').value = produtoId;
            document.querySelector('#form-deletar').submit();
        }
    }
</script>

</html>