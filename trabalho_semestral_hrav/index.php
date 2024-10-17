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

        <a href="login.php">
            <button type="button" class="btn btn-primary rounded-5 px-3">Área Administrador</button>
        </a>
    </header>

    <main class="container my-3 bg-white rounded-5 d-flex flex-column gap-5 main">
        <div class="mx-3">
            <h1 class="h2">Pesquisa de satisfação do HRAV</h1>
            <p><em>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</em></p>
        </div>

        <section>
            <h2 class="h4 mx-3">Qual é o seu nível de satisfação com o atendimento da recepção?</h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio0" autocomplete="off">
                <label class="btn bg-color-1" for="btnradio0">0</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn bg-color-0" for="btnradio1">1</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn bg-color-2" for="btnradio2">2</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn bg-color-3" for="btnradio3">3</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn bg-color-4" for="btnradio4">4</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn bg-color-5" for="btnradio5">5</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn bg-color-6" for="btnradio6">6</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                <label class="btn bg-color-7" for="btnradio7">7</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                <label class="btn bg-color-8" for="btnradio8">8</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                <label class="btn bg-color-9" for="btnradio9">9</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                <label class="btn bg-color-10" for="btnradio10">10</label>
            </div>
            
        </section>
        
        <section>
            <h2 class="h4 mx-3">Como você avalia a limpeza e organização das instalações do hospital?</h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio0" autocomplete="off">
                <label class="btn bg-color-1" for="btnradio0">0</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn bg-color-0" for="btnradio1">1</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn bg-color-2" for="btnradio2">2</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn bg-color-3" for="btnradio3">3</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn bg-color-4" for="btnradio4">4</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn bg-color-5" for="btnradio5">5</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn bg-color-6" for="btnradio6">6</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                <label class="btn bg-color-7" for="btnradio7">7</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                <label class="btn bg-color-8" for="btnradio8">8</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                <label class="btn bg-color-9" for="btnradio9">9</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                <label class="btn bg-color-10" for="btnradio10">10</label>
            </div>
        </section>

        <section>
            <h2 class="h4 mx-3">O tempo de espera para atendimento foi satisfatório?</h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio0" autocomplete="off">
                <label class="btn bg-color-1" for="btnradio0">0</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn bg-color-0" for="btnradio1">1</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn bg-color-2" for="btnradio2">2</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn bg-color-3" for="btnradio3">3</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn bg-color-4" for="btnradio4">4</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn bg-color-5" for="btnradio5">5</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn bg-color-6" for="btnradio6">6</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                <label class="btn bg-color-7" for="btnradio7">7</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                <label class="btn bg-color-8" for="btnradio8">8</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                <label class="btn bg-color-9" for="btnradio9">9</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                <label class="btn bg-color-10" for="btnradio10">10</label>
            </div>
        </section>

        <section>
            <h2 class="h4 mx-3">Como você avalia a qualidade do atendimento médico recebido?</h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio0" autocomplete="off">
                <label class="btn bg-color-1" for="btnradio0">0</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn bg-color-0" for="btnradio1">1</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn bg-color-2" for="btnradio2">2</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn bg-color-3" for="btnradio3">3</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn bg-color-4" for="btnradio4">4</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn bg-color-5" for="btnradio5">5</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn bg-color-6" for="btnradio6">6</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                <label class="btn bg-color-7" for="btnradio7">7</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                <label class="btn bg-color-8" for="btnradio8">8</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                <label class="btn bg-color-9" for="btnradio9">9</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                <label class="btn bg-color-10" for="btnradio10">10</label>
            </div>
        </section>

        <section>
            <h2 class="h4 mx-3">Você se sentiu bem informado(a) sobre os procedimentos e cuidados que recebeu?</h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio0" autocomplete="off">
                <label class="btn bg-color-1" for="btnradio0">0</label>
                
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn bg-color-0" for="btnradio1">1</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn bg-color-2" for="btnradio2">2</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn bg-color-3" for="btnradio3">3</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
                <label class="btn bg-color-4" for="btnradio4">4</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn bg-color-5" for="btnradio5">5</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                <label class="btn bg-color-6" for="btnradio6">6</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                <label class="btn bg-color-7" for="btnradio7">7</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                <label class="btn bg-color-8" for="btnradio8">8</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
                <label class="btn bg-color-9" for="btnradio9">9</label>
            
                <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
                <label class="btn bg-color-10" for="btnradio10">10</label>
            </div>
        </section>

        <section>
            <div class="mb-3">
                <label for="sugestao" class="form-label"><strong>Deixe uma sugestão para que possamos melhorar sua experiência no futuro (opcional)</strong></label>
                <textarea class="form-control" id="sugestao" rows="3"></textarea>
            </div>
    
            <footer class="action">
                <a href="obrigado.php">
                    <button type="button" class="btn btn-primary rounded-5 px-3">Enviar resposta</button>
                </a>
            </footer> 
        </section>   
    </main>

    <br />

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
