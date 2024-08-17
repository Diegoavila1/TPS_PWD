<?php
    include "../utiles/funciones.php";
    include "../control/control.php";
    include "../control/CheckImage.php";
    $datos = data_submitted();
    $objPelicula = new peliculas;


    $mostrarPelicula = $objPelicula->mostraPelicula($datos);
    $data = data_submitted();
    // print_r($_FILES);
    $archivo = new CheckImage();
    $respuesta = $archivo->subirArchivo($data);


    if ($respuesta == 0){
        $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo </p>";
    } 
    elseif ($respuesta == 1){
        $textoAMostrar = "<img src=".file_get_contents($archivo->getDir() . $data['archive']['name']).">" ;
    }
    elseif($respuesta == -2){
        $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No es un archivo txt</p>";
    }
    else {
        $textoAMostrar = "<p>ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal</p>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Respuesta</title>
</head>
<body>
    <div class="container container-md h-100 w-50 shadow-lg mt-5 p-3 rounded " style="background-color: rgb(42, 197, 106);">
    
    <h1>La pelicula introducida es</h1>
    <?php 
    echo $mostrarPelicula; 
    echo $textoAMostrar;
    ?>

    </div>
    
</body>
</html>