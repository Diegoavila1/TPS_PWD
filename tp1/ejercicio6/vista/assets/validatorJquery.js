$('#formulario').on('submit', function(event) {
    if ($('input[type="checkbox"]:checked').length === 0) {
        event.preventDefault();
        document.getElementById('contenedorEj6').style.color = "red";
        document.getElementById('contenedorEj6').innerHTML = " <p>Debe seleccionar al menos un checkbox<p><div id='contenedorEj1' class='bg-body rounded text-center'><button class='btn-volver'><a href='../../ejercicio6/vista/form.php'>Volver</a></button></div>";
    }
});