<?php
    $conn = pg_connect("postgres://gpfcgsidrkqkfh:2563ab31a7befea3318efad14c18993be392aaf890c66ad30c79abaf426d6970@ec2-44-194-4-127.compute-1.amazonaws.com:5432/d3dvm2f7qmgu8b")
        or die("Cannot connect database".pg_connect_error());
?>