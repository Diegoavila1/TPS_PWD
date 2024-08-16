 // Añadir la regla de validación personalizada
 $.validator.addMethod('notEqual', function(value, element, param) {
    return this.optional(element) || value !== $(param).val();
}, 'La contraseña no puede ser igual al nombre.');


$.validator.addMethod("distintoDe", function(value, element, param){
    return value != $(param).val();
}, "El nombre no puede ser igual a la contraseña.");

$.validator.addMethod("soloLetras", function(value, element){
    return /^[a-zA-Z]+$/.test(value);
});

$.validator.addMethod("letrasYnumeros", function(value){
    return /^[a-zA-Z]/.test(value) && /[0-9]/.test(value);
});

$(document).ready(function() {
    $("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
<<<<<<< HEAD
                distintoDe: "#password",
                soloLetras: true
=======
                notEqual: "#password" // Usa la regla personalizada
>>>>>>> 15de16513a3691f3447e16aa528a73e7cb18f809
            },
            password: {
                required: true,
                minlength: 8,
                distintoDe: "#name",
                letrasYnumeros: true
            }
        },
        messages: {
            name: {
                required: "Por favor, ingrese su nombre.", 
                minlength: "El nombre debe tener al menos 3 caracteres.",
<<<<<<< HEAD
                onlyLetters: "El nombre solo puede contener letras.",
                soloLetras: "El nombre solo puede contener letras."
=======
                notEqual: "La contraseña no puede ser igual al nombre." // Mensaje de error para la regla personalizada
>>>>>>> 15de16513a3691f3447e16aa528a73e7cb18f809
            },
            password: {
                required: "Por favor, ingrese su contraseña.",
                minlength: "La contraseña debe tener al menos 8 caracteres.",
                letrasYnumeros: "La contraseña debe contener letras y números."
            }
        }
    });
});