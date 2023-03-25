<?php
    define('DB_HOST', 'b1q.h.filess.io');
    define('DB_USER', 'signbook_marketsick');
    define('DB_PASS', '29f4014dbe375762979e229c686a95b8ee1fce4c');
    define('DB_NAME', 'signbook_marketsick');
    define('DB_PORT', 3307);

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    if ($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }
?>