<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avalia o Hospital</title>
    <link rel="icon" href="./assets/favicon-32x32.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>

  <body class="d-flex flex-column">
    <header class="container-fluid d-flex flex-row justify-content-between align-content-center bg-light py-3">
        <div class="d-flex flex-row gap-4 justify-content-center align-content-center">
            <a href="index.php">
                <img src="./assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="50px" />
            </a>
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h1>
        </div>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-3 p-5">
       <div class="mx-3 d-flex flex-column gap-2">
            <h1 class="h2">Pesquisa de Satisfação do HRAV</h1>
            <p>Confira a seguir a lista de perguntas cadastradas para a pesquisa de satisfação de atendimento do Hospital Regional Alto Vale.</p>
        </div>

        <div class="d-flex flex-column justify-content-end align-items-end align-content-end flex-wrap gap-2">
            <button type="button" class="btn btn-primary rounded-5 px-3" onclick="window.location.href='cadastro_pergunta.php';">Cadastrar questão</button>

            <table class="table table-hover table-light rounded-5">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">#</th>
                        <th scope="col" class="table-dark">Descrição</th>
                        <th scope="col" class="table-dark">Status</th>
                        <th scope="col" class="table-dark">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'src/listar_pergunta.php';

                    while ($row = pg_fetch_assoc($result)) {
                        $status = ($row['status'] === 't') ? 'Ativo' : 'Inativo';

                        echo "<tr>";
                        echo "<th scope='row'>" . ($row['id_pergunta']) . "</th>";
                        echo "<td>" . ($row['descricao_pergunta']) . "</td>";
                        echo "<td>" . $status . "</td>";
                        echo "<td>";
                        echo "<a href='src/editar_pergunta.php?id=" . ($row['id_pergunta']) . "' class='btn btn-warning btn-sm'>Editar</a> ";
                        echo "<a href='src/excluir_pergunta.php?id=" . ($row['id_pergunta']) . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table> 
        </div>
    </main>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
