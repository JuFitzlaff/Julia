<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="./assets/favicon-32x32.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>

  <body class="d-flex flex-column">
    <header class="container-fluid d-flex flex-row justify-content-start align-content-center bg-light py-3">
        <div class="d-flex flex-row gap-4 justify-content-center align-content-center">
            <a href="index.php">
                <img src="./assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="50px" />
            </a>
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h1>
        </div>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-4 login">
        <div class="container d-flex justify-content-center">
            <img src="./assets/logo-green.png" alt="Logo do Hospital Regional do Alto Vale em verde" title="Logo do Hospital do Alto Vale" width="70px" />
        </div>
        <form method="POST" action="src/login.php">
            <div>
                <label for="email" class="form-label"><strong>E-mail</strong></label>
                <input type="email" id="email" name="email" class="form-control" required placeholder="usuario@dominio.com.br">
            </div>

            <div>
                <label for="password" class="form-label"><strong>Senha</strong></label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="Digite sua senha">
            </div>

            <div class="d-grid mt-5">
                <button class="btn btn-primary rounded-5 btn" type="submit">Continuar</button>
            </div>
        </form>
    </main>
    
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
