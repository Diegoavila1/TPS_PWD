<?php


include '../../control/Archivo.php';
include "../../util/funciones.php";

$data = data_submitted();
// print_r($_FILES);
$archivo = new Archivo(); 
$respuesta = $archivo->subirArchivo($data);

if ($respuesta == 0){
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo </p>";
} elseif ($respuesta == 1){
    $textoAMostrar = "<p>El archivo " . $data['miArchivo']["name"] . " se ha copiado con Éxito </p>";
} else {
    $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo</title>
</head>
<body> 
    <div><h1><?php echo $textoAMostrar; ?></h1></div>
    
</body>
</html>