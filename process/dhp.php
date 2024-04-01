<?php

    $dsn = "mysql:host=localhost, dbname=todolist";
    $todo = "root";

    try {
        $pdo = new PDO($dsn,$todo);
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection Failed!!" . $e->getMessage();
    }