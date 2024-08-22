
$.validator.addMethod("soloLetras", function(value, element){
    return /^[a-zA-Z]+$/.test(value);
}, "El nombre solo puede contener letras.");

$("#formularioPelicula").validate({
    rules: {
        titulo: {
            required: true,
            minlength: 1,
            maxlength: 200
        },
        director: {
            required: true,
            minlength: 1,
            soloLetras: true
        },
        actores:{
            required: true,
            minlength: 1,
            soloLetras: true
        },
        produccion: {
            required: true,
            minlength: 1,
            soloLetras: true
        },
        nacionalidad: {
            required: true,
            minlength: 1,
            soloLetras: true
        },
        duracion: {
            required: true,
            minlength: 2,
            number: true
        },
        genero: {
            required: true,
        },
        edad:{
            required: true,
        },
        sinopsis: {
            required: true,
            minlength: 1,
            maxlength: 500
        }
    },
    messages: {
        titulo: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.💅</div>",
            onlyLetters: "<div class='msj-error'>El nombre solo puede contener letras. 💅</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras. 💅</div>"
        },
        director: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre. 🫦</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres. 💅</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        produccion: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        nacionalidad: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        duracion: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            number: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        genero: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        edad: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        },
        sinopsis: {
            required: "<div class='msj-error'>Por favor, ingrese su nombre.</div>", 
            minlength: "<div class='msj-error'>El nombre debe tener al menos 3 caracteres.</div>",
            soloLetras: "<div class='msj-error'>El nombre solo puede contener letras.</div>"
        }
    }
});