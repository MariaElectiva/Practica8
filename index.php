<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo!</title>
</head>
<body>
    <h1>Mi nombre es Maria Isabel Guzman Vallejo</h1>
    <h2>2022-1103 <NAME></h2>
    <?php
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión fallida con la db: " . $conn->connect_error);
        } else {
            echo "Conexión exitosa con laa db";
        }
    ?>
</body>
</html>