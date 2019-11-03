<?php

$link = 'mysql:host=localhost;dbname=tienda';
$user = 'root';
$pass = '';

try {

    $pdo = new PDO($link, $user, $pass);
    echo "conectado";
    // foreach ($pdo->query('SELECT * from colores') as $fila) {
    //     print_r($fila);
    // }
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
