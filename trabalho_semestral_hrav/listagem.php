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
            <h1 class="header-title h3">HRAV - Hospital Regional do Alto Vale</h3>
        </div>

    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-3 p-5">
       <div class="mx-3 d-flex flex-column gap-2">
            <h1 class="h2">Pesquisa de satisfação do HRAV</h1>
            <p>Confira a seguir a lista de perguntas cadastradas para a pesquisa de satisfação de atendimento do Hospital Regional Alto Vale.</p>
        </div>

        <div class="d-flex flex-column justify-content-end align-items-end align-content-end flex-wrap gap-2">
            <button type="button" class="btn btn-primary rounded-5 px-3">Cadastrar questão</button>
            <table class="table table-hover table-light rounded-5">
                <thead>
                    <tr>
                        <th scope="col" class="table-dark">#</th>
                        <th scope="col" class="table-dark">Descrição</th>
                        <th scope="col" class="table-dark">Setor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Qual é o seu nível de satisfação com o atendimento da equipe de enfermagem?</td>
                        <td>Enfermagem</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Como você avalia o tempo de espera para ser atendido no setor de emergência?</td>
                        <td>Emergência</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Como você avalia a clareza das orientações fornecidas pelos médicos?</td>
                        <td>Médicos</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Qual é o seu grau de satisfação com o ambiente e o conforto da sala de espera?</td>
                        <td>Sala de Espera</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Como você avalia a qualidade das refeições fornecidas durante a internação?</td>
                        <td>Alimentação</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Qual é o seu nível de satisfação com o atendimento prestado durante o processo de internação?</td>
                        <td>Internação</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Como você avalia a atenção e o cuidado da equipe de UTI?</td>
                        <td>UTI</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Qual é a sua opinião sobre a agilidade no atendimento para a realização de exames?</td>
                        <td>Exames</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Como você avalia o atendimento recebido no setor de farmácia?</td>
                        <td>Farmácia</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Qual é a sua satisfação com o atendimento prestado no setor de fisioterapia?</td>
                        <td>Fisioterapia</td>
                    </tr>

                </tbody>
            </table> 
        </div>
    </main>

    <br />

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>