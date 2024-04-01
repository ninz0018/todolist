<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $todo = $_POST["todo"];
        $add = $_POST["add"];

        try {
            require_once "dhp.php";

            $query = "INSERT INTO todo (do) VALUES(:todo);";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":todo", $todo);

            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($todo)) {
                $_SESSION[""]
            }



        } catch(PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
    
    }

    ?>