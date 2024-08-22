$("#formulario").validate({
    rules:{
        jueves: {
            required: true,
            number: true
        },
        viernes: {
            required: true,
            number: true
        },
    }, messages:{
        jueves: {
            required: "<div class='msj-error'>Por favor, ingrese la cantidad de horas cursadas para el jueves.</div>",
            number: "<div class='msj-error'>Ingrese un número válido.</div>"
        },
        viernes: {
            required: "<div class='msj-error'>Por favor, ingrese la cantidad de horas cursadas para el viernes.</div>",
            number: "<div class='msj-error'>Ingrese un número válido.</div>"
        }
    }
})