// Establecer los valores por defecto para el manejador de envío
$.validator.setDefaults({
    submitHandler: function() {
        alert("Formulario enviado con éxito!");
    }
});

$(document).ready(function() {
    $("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                equalTo: "#password" // Usa la regla personalizada
            },
            password: {
                required: true,
                minlength: 8
            }
        },
        messages: {
            name: {
                required: "Por favor, ingrese su nombre.",
                minlength: "El nombre debe tener al menos 3 caracteres.",
            },
            password: {
                required: "Por favor, ingrese su contraseña.",
                minlength: "La contraseña debe tener al menos 8 caracteres."
            }
        }
    });
});
