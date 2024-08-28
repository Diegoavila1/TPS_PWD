$("#formulario").validate({
    rules:{
        edad:{
            required:true,
            number:true
        },
        estudiante:{
            required:true
        }
    }, messages:{
        edad:{
            required:"Campo obligatorio",
            number:"Debe ser un número"
        },
        estudiante:{
            required:"Campo obligatorio"
        }
    }
})