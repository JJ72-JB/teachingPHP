<?php
require "db/db.php";

if(!empty($_POST["txtNombre"]))
{
    $name = $_POST["txtNombre"];
    $cnn = new db;
    $exe = $cnn->connection()->prepare("insert into users(name) values('$name')");
    $exe->execute();
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>

    <title>Learning php</title>
</head>
<body>
    <center>
        <form method="POST" action="index.php">
            <p class="description">Ingresa tu nombre:</p>
            <input type="text" placeholder="Escribe tu nombre" name="txtNombre"/>
            <button type="submit" class="btn"><span>Guardar</span></button>
        </form>
    </center>
</body>
</html>
