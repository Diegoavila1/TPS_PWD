/*
$.validator.setDefaults( {
    submitHandler: function () {
       alert( "submitted!" );
    }
 });

$(document).ready(function() {
    $("#form").validate({
        rules: {
            name:{
                required: true,
                minlength: 3,
            },
            password:{
                required: true,
                minlength: 8,
            }
        }, messages: {
            name: {
                required: "Por favor, ingrese su nombre",
                minlength: "El nombre debe tener al menos 3 caracteres",
                notEqual: "El nombre no puede ser igual a la contraseña"
            },
            password: {
                required: "Por favor, ingrese su contraseña",
                minlength: "La contraseña debe tener al menos 8 caracteres"
            }
        }
    })
});*/


 // Añadir la regla de validación personalizada
 $.validator.addMethod('notEqual', function(value, element, param) {
    return this.optional(element) || value !== $(param).val();
}, 'La contraseña no puede ser igual al nombre.');

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
                notEqual: "#password" // Usa la regla personalizada
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
                notEqual: "La contraseña no puede ser igual al nombre." // Mensaje de error para la regla personalizada
            },
            password: {
                required: "Por favor, ingrese su contraseña.",
                minlength: "La contraseña debe tener al menos 8 caracteres."
            }
        }
    });
});
