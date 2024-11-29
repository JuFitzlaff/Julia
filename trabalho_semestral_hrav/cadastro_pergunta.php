<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Perguntas</title>
    <link rel="icon" href="./assets/favicon-32x32.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>

  <body class="d-flex flex-column">
    <header class="container-fluid d-flex flex-row justify-content-between align-content-center bg-light py-3">
        <div class="d-flex flex-row gap-4 justify-content-center align-content-center">
            <img src="./assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="50px" />
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h1>
        </div>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-5 p-5">
        <div class="mx-3 d-flex flex-column gap-2">
            <h1 class="h2">Cadastrar pergunta para pesquisa de satisfação</h1>
        </div>

        <form action="src/cadastrar_pergunta.php" method="POST">
            <div>
                <label for="questao" class="form-label">Descrição da questão:<span style="color: red;">*</span></label>
                <textarea class="form-control" id="questao" name="descricao_pergunta" rows="4" placeholder="Digite a descrição da questão" required></textarea>
            </div>
            <br>
            <div class="d-flex gap-2 justify-content-end">
                <button type="reset" class="btn btn-secondary rounded-5 px-3">Cancelar</button>
                <button type="submit" class="btn btn-primary rounded-5 px-3">Cadastrar questão</button>
            </div>
        </form>
    </main>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
