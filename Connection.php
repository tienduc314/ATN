<?php
    $conn = pg_connect("postgres://ruspbqtdbhkvfg:0294668303e797292a55db208f98e3638be77f9fe23dd7e964024b74d84029e1@ec2-44-194-4-127.compute-1.amazonaws.com:5432/ddcs19b34185hb")
        or die("Cannot connect database".pg_connect_error());
?>