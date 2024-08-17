 <?php

 class peliculas{

    public function mostraPelicula($datos){
        $pelicula = [];
        $pelicula[0] = $datos["titulo"];
        $pelicula[] = $datos["director"];
        $pelicula[] = $datos["produccion"];
        $pelicula[] = $datos["nacionalidad"];
        $pelicula[] = $datos["duracion"];
        $pelicula[] = $datos["actores"];
        $pelicula[] = $datos["guion"];
        $pelicula[] = $datos["anio"];
        $pelicula[] = $datos["edad"];
        $pelicula[] = $datos["genero"];



        $string = "Titulo : $titulo ";
        $string .= "Actores : $actores";
        $string .= "Director : $director";
        $string .= "Guion : $guion";
        $string .= "Produccion : $produccion";
        $string .= "Anio : $anio";
        $string .= "Nacionalidad : $nacionalidad";
        $string .= "Genero : $generos";
        $string .= "Duracion : $duracion";
        $string .= "Restricciones de edad : $restriccionesEdad";
        
        return $string;
    }
    

 }