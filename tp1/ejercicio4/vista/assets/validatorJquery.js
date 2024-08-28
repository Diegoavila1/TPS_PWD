$("#formulario").validate({
    rules: {
        nombre: { required: true, minlength: 3, maxlength: 50 },
        apellido: { required: true, minlength: 3, maxlength: 50 },
        edad: { required: true, number: true, min: 18},
        direccion: { required: true, minlength: 3, maxlength: 100 },
    }, messages: {
        nombre: { required: "Campo requerido", minlength: "El nombre debe tener al menos 3 caracteres", maxlength: "El nombre debe tener menos de 50 caracteres" },
        apellido: { required: "Campo requerido", minlength: "El apellido debe tener al menos 3 caracteres", maxlength: "El apellido debe tener menos de 50 caracteres" },
        edad: { required: "Campo requerido", number: "La edad debe ser un número", min: "La edad debe ser mayor a 18" },
        direccion: { required: "Campo requerido", minlength: "La dirección debe tener al menos 3 caracteres", maxlength: "La dirección debe tener menos de 100 caracteres" },
    }
})