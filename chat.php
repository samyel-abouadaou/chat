<HTML>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src='script.js'></script>
    </head>
    <BODY>

        <?php
        session_start();
//$pdo = new PDO("mysql:host=localhost;dbname=chat","root", "");

        $_SESSION['user'] = $_POST['utilisateur'];
        ?>

        <textarea rows="6" cols="40" disabled="true" id="zone">

        </textarea></br>
        <input type="text" style="width: 245px;" id="message"><input type="button" value="envoyer" id="envoyer">
    </BODY>
</HTML>