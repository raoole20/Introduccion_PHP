<?php include 'includes/header.php';


$nombre = "Juan";

/*LAs variables son dinamicas*/ 
$nombre = "Juan 2";

echo $nombre;
var_dump($nombre);

/*Crear Constastes es una funcion qloco*/  
/**Una constante es una un map en java */
define('constante', "Este es el valor de la constante");
echo constante;

const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';