<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Validación de Formulario</title>

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

     
</head>

<body>
    <!-- Aquí irá tu formulario -->
    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded bg-dark" style="max-width: 25%;
    justify-content: center;
    ">
        <h1 class="mb-4">Member Login</h1>
        <form id="form" action="verificaPass.php" method="post">
            <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" id="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-success"
            style="width: 60%; margin: auto; display: flex; justify-content: center;">Login</button>
        </form>
        
        <div id="resultado"></div>

        <script src="validar_jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
        
    </div>
    </div>
 
</body>

</html>