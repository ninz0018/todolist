<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tod = $_POST["todo"];

    


    try {
        require_once "dhp.inc.php";

        $query = "INSERT INTO todo (dos) VALUES(:todo);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":todo", $tod);
    
        $stmt->execute();

    } catch(PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

}

