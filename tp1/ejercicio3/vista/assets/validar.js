$.validator.addMethod("soloLetras", function(value, element){
    return /^[a-zA-Z]+$/.test(value);},
"El nombre solo puede contener letras.");


$("#formulario1").validate({
    rules:{
        nombre:{
            required: true,
            minlength: 3,
            soloLetras: true
        },
        apellido:{
            required: true,
            minlength: 3,
            soloLetras: true
        },
        edad:{
            required: true,
            number: true,
            maxleght:3
        },
        direccion:{
            required: true,
            minlength: 3
        },
    }, messages:{
        nombre:{
            required: "<p class='msj-error'>Por favor, ingrese su nombre.</p>",
            minlength: "<p class='msj-error'>El nombre debe tener al menos 3 caracteres.</p>",
            soloLetras: "<p class='msj-error'>El nombre solo puede contener letras.</p>"
        },
        apellido:{
            required: "<p class='msj-error'>Por favor, ingrese su apellido.</p>",
            minlength: "<p class='msj-error'>El apellido debe tener al menos 3 caracteres.</p>",
            soloLetras: "<p class='msj-error'>El apellido solo puede contener letras.</p>"
        },
        edad:{
            required: "<p class='msj-error'>Por favor, ingrese su edad.</p>",
            number: "<p class='msj-error'>Ingrese un número válido.</p>",
            maxleght: "<p class='msj-error'>La edad no puede superar los 3 dígitos.</p>"
        },
        direccion:{
            required: "<p class='msj-error'>Por favor, ingrese su dirección.</p>",
            minlength: "<p class='msj-error'>La dirección debe tener al menos 3 caracteres.</p>"
        }
    }
})

$("#formulario2").validate({
    rules:{
        nombre:{
            required: true,
            minlength: 3,
            soloLetras: true
        },
        apellido:{
            required: true,
            minlength: 3,
            soloLetras: true
        },
        edad:{
            required: true,
            number: true,
            maxleght:3
        },
        direccion:{
            required: true,
            minlength: 3
        },
    }, messages:{
        nombre:{
            required: "<p class='msj-error'>Por favor, ingrese su nombre.</p>",
            minlength: "<p class='msj-error'>El nombre debe tener al menos 3 caracteres.</p>",
            soloLetras: "<p class='msj-error'>El nombre solo puede contener letras.</p>"
        },
        apellido:{
            required: "<p class='msj-error'>Por favor, ingrese su apellido.</p>",
            minlength: "<p class='msj-error'>El apellido debe tener al menos 3 caracteres.</p>",
            soloLetras: "<p class='msj-error'>El apellido solo puede contener letras.</p>"
        },
        edad:{
            required: "<p class='msj-error'>Por favor, ingrese su edad.</p>",
            number: "<p class='msj-error'>Ingrese un número válido.</p>",
            maxleght: "<p class='msj-error'>La edad no puede superar los 3 dígitos.</p>"
        },
        direccion:{
            required: "<p class='msj-error'>Por favor, ingrese su dirección.</p>",
            minlength: "<p class='msj-error'>La dirección debe tener al menos 3 caracteres.</p>"
        }
    }
})