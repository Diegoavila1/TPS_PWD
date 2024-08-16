 // Añadir la regla de validación personalizada


$(document).ready(function() {
    $.validator.addMethod('notEqual', function(value, element, param) {
    return this.optional(element) || value !== $(param).val();
}, 'La contraseña no puede ser igual al nombre.');


$.validator.addMethod("distintoDe", function(value, element, param){
    return value != $(param).val();
}, "El nombre no puede ser igual a la contraseña.");

$.validator.addMethod("soloLetras", function(value, element){
    return /^[a-zA-Z]+$/.test(value);
}, "El nombre solo puede contener letras.");

$.validator.addMethod("letrasYnumeros", function(value){
    return (/^[a-zA-Z]/.test(value) && /[0-9]/.test(value)) || (/^[0-9]/.test(value) && /[a-zA-Z]/.test(value));
});
    $("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                distintoDe: "#password",
                soloLetras: true
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
                onlyLetters: "El nombre solo puede contener letras.",
                soloLetras: "El nombre solo puede contener letras."
            },
            password: {
                required: "Por favor, ingrese su contraseña.",
                minlength: "La contraseña debe tener al menos 8 caracteres.",
                letrasYnumeros: "La contraseña debe contener letras y números."
            }
        }
    });
});