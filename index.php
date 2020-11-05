<?php
echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
    <div class="nav">
        <h1>Geolocalizador de IPs</h1>
        <h3>Rubén Herrera Marcos</h3>
    </div>
    <div class="formulario">
    <h2>Introducción Datos</h2>
        <form action="index.php">
            <input type="text" id="number1" name="number1" placeholder="IP decimal" required><br><br>
            <button type="submit">Mostrar Información</button>
        </form>
    </div>
    <div class="informacion">
        <h2>Información</h2>
    </div>
</body>
</html>';
?>