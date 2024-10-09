<?php

$dbconn = pg_connect('host=localhost port=5432 dbname=postgres user=postgres password=12345');

    if($dbconn) {
            
        $pesquisa = array("%".$_POST['campo_pesquisa']."%");

        $result = pg_query_params($dbconn, "SELECT * FROM TBPESSOA
                                            WHERE PESNOME ILIKE $1",
                                  $pesquisa);

        if(pg_num_rows($result) > 0) {
            while($pessoa = pg_fetch_assoc($result)) {
                var_dump($pessoa);
            }
        }
            
    }
?>