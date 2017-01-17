<HTML>
    <HEADER>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src='script.js'></script>
    </HEADER>
</HTML>

<?php

    $message = $_POST['message'];
    $date = $_POST['date'];

    $pdo = new PDO("mysql:host=localhost;dbname=chat","root", "");
    $film = $pdo->exec("INSERT INTO `messages`(`message`, `date`) VALUES ('$message','$date')");

?>