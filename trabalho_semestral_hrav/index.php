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
            <img src="./assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="50px" />
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h1>
        </div>

        <a href="login.php">
            <button type="button" class="btn btn-primary rounded-5 px-3">Área Administrador</button>
        </a>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-5 main">
        <div class="mx-3">
            <h1 class="h2">Pesquisa de satisfação do HRAV</h1>
            <p><em>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</em></p>
        </div>

        <!-- Formulário para enviar respostas -->
        <form action="src/respostas.php" method="POST">
            <?php
            // Inclui o arquivo de perguntas
            include 'src/perguntas.php';
            ?>

            <section>
                <div class="mb-3">
                    <label for="sugestao" class="form-label"><strong>Deixe uma sugestão para que possamos melhorar sua experiência no futuro (opcional):</strong></label>
                    <textarea class="form-control" id="sugestao" name="sugestao" rows="3"></textarea>
                </div>
    
                <footer class="action">
                    <button type="submit" class="btn btn-primary rounded-5 px-3">Enviar resposta</button>
                </footer> 
            </section>   
        </form>
    </main>

    <br />

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
