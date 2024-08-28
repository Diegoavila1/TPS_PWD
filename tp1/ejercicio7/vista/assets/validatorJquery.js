$("#formulario").validate({
    rules:{
        numUno:{
            required:true,
            number:true
        },
        numDos:{
            required:true,
            number:true
        },
        selects:{
            required:true
        }
    },messages:{
        numUno:{
            required:"Campo obligatorio",
            number:"Debe ser un número"
        },
        numDos:{
            required:"Campo obligatorio",
            number:"Debe ser un número"
        },
        selects:{
            required:"Campo obligatorio"
        }
    }
});