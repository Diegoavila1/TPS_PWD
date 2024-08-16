 <?php

 class peliculas{


    public function restriccionEdad($datos){
        $restriccionesEdad = $datos["edad"];
        $string = null;

        return $string;
    }

    public function mostraPelicula($datos){

        $titulo = $datos["titulo"];
        $director = $datos["director"];
        $produccion = $datos["produccion"];
        $nacionalidad = $datos["nacionalidad"];
        $duracion = $datos["duracion"];
        $actores = $datos["actores"];
        $guion = $datos["guion"];
        $anio = $datos["anio"];
        $restriccionesEdad = ["edad"];
        $generos = $datos["genero"];

        foreach($restriccionesEdad as $edad => $llave){
            if($llave != null){
                $restriccionesEdad = $llave;
            }
        }

        $string = "Titulo : $titulo";
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