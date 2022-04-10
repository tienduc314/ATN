<?php
    $conn = pg_connect('localhost', 'root', '', 'ananas_shop')
        or die("Cannot connect database".pg_connect_error());
?>

