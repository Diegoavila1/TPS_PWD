<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluir jQuery Validation -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <!-- Aquí irá tu formulario -->

    <div class="container mt-5 shadow p-3 mb-5 bg-body rounded" style="max-width: 20%;
    justify-content: center;
    " >
        <h1 class="mb-4">Member Login</h1>
        <form id="formulario-registro" action="../control/control.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="usuario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success" style="width: 60%; margin: auto; display: flex; justify-content: center;">Login</button>
        </form>
        <div id="resultado">

    </div>
    </div>

</body>
</html>