<?php
    $host = 'localhost';
    $user = 'id9479042_vitae';
    $password = '123456unifacs';
    $banco = 'id9479042_vitae_db';
    $db = new mysqli($host, $user, $password, $banco);
    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        exit();
    }
?>