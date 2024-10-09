<?php
    $dbconn = pg_connect('host=localhost port=5432 dbname=postgres user=postgres password=12345');

    if($dbconn) {
            
        $result = pg_query($dbconn, "SELECT * FROM TBPESSOA 
                WHERE PESNOME ILIKE '%julia%'");

        while($pessoa = pg_fetch_assoc($result)) {
            var_dump($pessoa);
        }
            
    }

?>