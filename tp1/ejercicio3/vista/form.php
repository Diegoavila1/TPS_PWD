<?php
    include '../../../estructura/header.php';
  ?>

      <main class="container shadow-lg rounded-top" style="min-height: 600px; background-color : #00aaff ; width: 64%;">

                    
      <div class="row ">
            <div class="col" id="content">
                <h1>Consigna: 3</h1>
                <p>
                    Crear una página php que contenga un formulario HTML como el que se indica en la
                    imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                    que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                    nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                    Cambiar el método Post por Get y analizar las diferencias </p>
            </div>
      </div>

        <div class="row mt-5">
                
                <div class="row" id="contenedor">
               
                  <div class="col" id="post">
                    
                    <form action="action/formAction.php" method="post">
                        <h1 style="text-align: center;">POST</h1>
                        <label for="">Nombre :</label>
                        <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="Nombre">
                        <label for="">Apellido : </label>
                        <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="Apellido">
                        <label for="">Edad :</label>
                        <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="Edad">
                        <label for="">Direcion :</label>
                        <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="Direccion">
                        <button type="submit" class="boton" >Enviar</button>                    
                    </form>

                  </div>
                  
                  <div class="col" id="get">
                    <form action="action/formAction.php" method="get">
                        <h1 style="text-align: center;">GET</h1>
                        <label for="">Nombre :</label>
                        <input class="form-control ancho-input" type="text" name="nombre" id="" style="display:block" placeholder="Nombre">
                        <label for="">Apellido :</label>
                        <input class="form-control ancho-input" type="text" name="apellido" id="" style="display:block" placeholder="Apellido">
                        <label for="">Edad :</label>
                        <input class="form-control ancho-input" type="number" name="edad" id="" style="display:block" placeholder="Edad">
                        <label for="">Direcion :</label>
                        <input class="form-control ancho-input" type="text" name="direccion" id="" style="display:block" placeholder="Direccion">
                        <button type="submit" class="boton">Enviar</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
      <div class="fotosPostGet">
        <div class="row  mt-5">
                <div class="col" id="postfoto">
                  <h1>POST</h1>
                  <img src="../../../imagenes/form3Post.png" alt="" class="img-codigo">
                </div>
        </div>
        <div class="row  mt-5" id="getfoto">
                <div class="col">
                  <h1>GET</h1>
                  <img src="../../../imagenes/form3Get.png" alt="" class="img-codigo">
                </div>
        </div>
        </div>

        </div>


        
      </main>

      <footer class="container-fluid d-flex justify-content-between bg-dark shadow-lg ">

<div class="row text-light">
  <ul class="" style="list-style-type: none; padding-left: 60px; margin-top:14% ; margin-bottom:14%;">
    <li>Diego Rios</li>
    <li>Miguel Soto</li>
    <li>Juan Cruz Geslowski </li>
    <li>Barquito </li>

  </ul>
</div>

<div class="row" style="margin-right: 50px; margin-top:10px;">
  <div class="col">
    <p class="text-light mt-5">Programacion Web Dinamica 2024 @</p>
  </div>

</div>
</footer>

</body>
</html>