<?php
    require_once 'db.php';

    $db = db_connect();

    echo 'Database Connection'.$db->connection;

    $db->close();
?>