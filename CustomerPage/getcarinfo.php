<?php

try {
    $creg = $_GET['RegNo'];
    $pdo = new PDO('mysql:host=localhost;dbname=carsys; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT ca.Cost, ca.Description, Image, Make,Model,CarType,`A/C`,NumSeats,Transmission,Fuel
    ,RegNo  FROM category ca, cars WHERE ca.CatID = cars.CatID AND RegNo = '$creg'";
    $result = $pdo->query($sql);
    $row = $result->fetch();
} catch (PDOException $e){
    echo  $output = 'An error has occurred : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}
