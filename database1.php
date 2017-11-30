<?php
    $dsn = 'mysql:host=sql.njit.edu;dbname=gds24';
    $username = 'gds24';
    $password = 'OEgO7oED';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>