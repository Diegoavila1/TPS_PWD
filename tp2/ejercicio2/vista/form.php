<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 4 </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>

    <!--Ejercicio 4
    Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
    tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
    Aplicar Bootstrap y validar los siguiente:
    - El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
    aceptar números.
    - El campo duración debe permitir un máximo de 3 números.
    - Todos los datos son obligatorios
    - Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
    formulario.
    - El botón “Borrar” debe limpiar el formulario.
    El diseño del formulario completo es el siguiente:
    -->  

 <div class="container h-100 shadow-lg md mt-5 p-3 rounded">
    <h1 class="text-info bg-light col-md-12 rounded p-3">Cinem@s</h1>
     
    <form action="formAction.php" method="post">
      <div class="row">
        
        <div class="col-md-6">
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
          </div>
          
          <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" id="director" class="form-control">
          </div>
          
          <div class="mb-3">
            <label for="produccion" class="form-label">Producción</label>
            <input type="text" name="produccion" id="produccion" class="form-control">
          </div>
          
          <div class="mb-3">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="form-control">
          </div>
          <div class="mb-3  ancholabel">
            <label for="duracion" class="form-label">Duración</label>
            <input type="duracion" name="duracion" id="duracion" class="form-control" required maxlength="4">
          </div>
             <div class="invalid-feedback">
                Por favor seleccione un género.
            </div>
        </div>

        <style> 
           .ancholabel {
             width: 70px;
           }
        </style>
        
       
        <div class="col-md-6">
          
          
          <div class="mb-3">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" name="actores" id="actores" class="form-control">
          </div>
          
          <div class="mb-3">
            <label for="guion" class="form-label">Guion</label>
            <input type="text" name="guion" id="guion" class="form-control">
          </div>
          
          <div class="mb-3 w-25">
            <label for="ano" class="form-label " >Año</label>
            <input type="text" name="ano" id="ano" class="form-control" maxlength="4">
          </div>
          
          <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select name="genero" id="genero" class="form-control">
              <option value="accion"></option>
              <option value="comedia">Comedia</option>
              <option value="accion">Drama</option>
              <option value="accion">Acción</option>
              <option value="terror">Terror</option>
              <option value="accion">Románticas</option>
              <option value="accion">Suspenso</option>
            </select>
          </div>
          <div class="mb-3">
        <label class="form-label">Restricción de Edad</label>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad1" value="" class="form-check-input">
          <label for="edad1" class="form-check-label">Todos los publicos.</label>
        </div>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad2" value="" class="form-check-input">
          <label for="edad2" class="form-check-label">Mayores de 7 años.</label>
        </div>
        
        <div class="form-check">
          <input type="radio" name="edad" id="edad3" value="" class="form-check-input">
          <label for="edad3" class="form-check-label">Mayores de 18 años.</label>
        </div>
      </div>
    </div>
</div>
        <div class="mb-3 ">
            <label for="director" class="form-label">Sinopsis</label>
            <input type="text" name="director" id="director" class="form-control altura">
          </div>
          
          <style>
            .altura {
                height: 120px;
            }
          </style>
      
      <div class="d-flex justify-content-end m-4">
        <button type="submit" class="btn btn-primary m-1">Enviar</button>
        <button type="reset" class="btn btn-secondary m-1">Resetear</button>
      </div>
    </form>
    </div>
</body>
</html>