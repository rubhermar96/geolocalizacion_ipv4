<?php
require __DIR__ . '/vendor/autoload.php';
use ipinfo\ipinfo\IPinfo;
use Foolz\Inet\Inet;
$access_token = '392d8815ea1b96';
$client = new IPinfo($access_token);

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
            <button type="submit" name="mostrar">Mostrar Información</button>
        </form>
    </div>
    <div class="informacion">
        <h2>Información</h2>';
    if(isset($_REQUEST['mostrar'])){
        $decimal_ip=htmlspecialchars($_REQUEST['number1'], ENT_QUOTES,'UTF-8');
        $ip = Inet::dtop($decimal_ip);
        $ip_address = $ip;
        $details = $client->getDetails($ip_address);
        echo '<ul><li>Ip: '.$details->ip.'</li><li>Ciudad --> '.$details->city.'</li><li>País --> '.$details->country_name.'</li><li>Código País --> '.$details->country.'</li><li>Código Postal --> '.$details->postal.'</li><li>Zona Horaria --> '.$details->timezone.'</li><li>Organización --> '.$details->org.'</li><li>Latitud --> '.$details->latitude.'</li><li>Longitud --> '.$details->longitude.'</li></ul>';           
};      
echo    '</div>
</body>
</html>';
?>