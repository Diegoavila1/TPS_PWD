 <?php

 class peliculas{

    public function mostraPelicula($datos){
        $titulo = $datos["titulo"];
        $director = $datos["director"];
        $produccion = $datos["produccion"];
        $nacionalidad = $datos["nacionalidad"];
        $duracion = $datos["duracion"];
        $actores = $datos["actores"];
        $guion = $datos["guion"];
        $anio = $datos["anio"];
        $restriccionesEdad = $datos["edad"];
        $generos = $datos["genero"];



        $string = "Titulo : $titulo <br>";
        $string .= "Actores : $actores<br>";
        $string .= "Director : $director<br>";
        $string .= "Guion : $guion<br>";
        $string .= "Produccion : $produccion<br>";
        $string .= "Anio : $anio<br>";
        $string .= "Nacionalidad : $nacionalidad<br>";
        $string .= "Genero : $generos<br>";
        $string .= "Duracion : $duracion<br>";
        $string .= "Restricciones de edad : $restriccionesEdad<br>";
        
        return $string;
    }
    

 }