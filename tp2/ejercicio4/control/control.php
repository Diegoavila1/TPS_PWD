 <?php

 class peliculas{

    public function mostraPelicula($datos){
        $pelicula = [];
        $pelicula[0] = "pelicula: ".$datos["titulo"];
        $pelicula[1] = "director: ".$datos["director"];
        $pelicula[2] = "productor: ". $datos["produccion"];
        $pelicula[3] = "nacionalidad: ".$datos["nacionalidad"];
        $pelicula[4] = "duracion: ".$datos["duracion"];
        $pelicula[5] = "actores: ".$datos["actores"];
        $pelicula[6] = "guion: ".$datos["guion"];
        $pelicula[7] = "anio: ".$datos["genero"];
        $pelicula[8] = "edad: ".$datos["edad"];
        $pelicula[9] = "sinopsis".$datos["sinopsis"];
        return $pelicula;
    }
    

 }