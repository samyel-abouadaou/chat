<?php

    $pdo = new PDO("mysql:host=localhost;dbname=chat","root", "");
    $messages = $pdo->query("SELECT * FROM `messages` ORDER BY  date DESC LIMIT 5")->fetchAll();

    echo json_encode($messages);
?>