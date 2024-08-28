$('#formulario').validate({
    rules:{
        numero:{
            required: true,
            number: true
        }
    },
    messages:{
        numero:{
            required: "<div class='msj-error'>El campo es obligatorio</div>",
            number: "<div class='msj-error'>El campo debe ser un número</div>"
        }
    }
})