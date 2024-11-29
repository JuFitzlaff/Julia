<?php
//Conectar ao banco de dados
include 'bd.php';

//Obter o ID da pergunta via GET
$id_pergunta = $_GET['id'];

//Consultar os dados da pergunta
$query = "SELECT * FROM public.tbpergunta WHERE id_pergunta = $1";
$result = pg_query_params($conn, $query, array($id_pergunta));

//Buscar os dados da pergunta
$row = pg_fetch_assoc($result);

//Fechar a conexão com o banco de dados após a consulta
pg_close($conn);
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Pergunta</title>
    <link rel="icon" href="../assets/favicon-32x32.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
  </head>

  <body class="d-flex flex-column">
    <header class="container-fluid d-flex flex-row justify-content-between align-content-center bg-light py-3">
        <div class="d-flex flex-row gap-4 justify-content-center align-content-center">
            <img src="../assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="50px" />
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h1>
        </div>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-3 p-5">
       <div class="mx-3 d-flex flex-column gap-2">
            <h1 class="h2">Editar Pergunta</h1>
            <p>Edite os dados da pergunta abaixo.</p>
        </div>

        <form action="atualizar_pergunta.php" method="POST">
            <input type="hidden" name="id_pergunta" value="<?php echo $row['id_pergunta']; ?>" />

            <div class="mb-3">
                <label for="descricao_pergunta" class="form-label">Descrição da Pergunta</label>
                <input type="text" class="form-control" id="descricao_pergunta" name="descricao_pergunta" value="<?php echo htmlspecialchars($row['descricao_pergunta']); ?>" required />
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="true" <?php echo ($row['status'] === true) ? "selected" : ""; ?>>Ativo</option>
                    <option value="false" <?php echo ($row['status'] === false) ? "selected" : ""; ?>>Inativo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="../listagem.php" class="btn btn-secondary">Voltar</a>
        </form>
    </main>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

