<?php
//Conectar ao banco de dados
include 'bd.php';

//Consulta SQL para buscar perguntas ativas
$sql = "SELECT id_pergunta, descricao_pergunta FROM public.tbpergunta WHERE status = TRUE";

//Executa a consulta
$result = pg_query($conn, $sql);

//Verifica se existem perguntas para exibir
if (pg_num_rows($result) > 0) {
    //Exibe as perguntas encontradas
    while ($row = pg_fetch_assoc($result)) {
        $id_pergunta = $row['id_pergunta'];
        $descricao_pergunta = $row['descricao_pergunta'];
        ?>
        <section>
            <h2 class="h4 mx-3"><?php echo htmlspecialchars($descricao_pergunta); ?></h2>
            <div class="btn-group classificacao" role="group" aria-label="Opções para avaliação">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
            <input type="radio" class="btn-check" name="pergunta_<?php echo $id_pergunta; ?>" id="btnradio<?php echo $i; ?>_<?php echo $id_pergunta; ?>" value="<?php echo $i; ?>" autocomplete="off">
            <label class="btn bg-color-<?php echo $i; ?>" for="btnradio<?php echo $i; ?>_<?php echo $id_pergunta; ?>"><?php echo $i; ?></label>
            <?php } ?>
            </div>
            <br>
        </section>
        <?php
    }
} else {
    echo "<p>Não há perguntas disponíveis.</p>";
}
//Fecha a conexão com o banco de dados
pg_close($conn);
?>