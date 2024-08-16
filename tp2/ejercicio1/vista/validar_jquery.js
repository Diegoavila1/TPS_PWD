

$(function () {

    jQuery("#form").validate({
        rules: {
            name: {
                required: true,
                minlength: 8
            },
            password: {
                required: true,
                minlength: 8,
                notEqualTo: "#Nombre"
            }
    
        }, messages: {
            name: {
                required: "Por favor, ingrese su nombre",
                minlength: "El nombre debe tener al menos 8 caracteres"
            },
            password: {
                required: "Por favor, ingrese su contraseña",
                minlength: "La contraseña debe tener al menos 8 caracteres"
            }
        }, submitHandler: function (form) {
            form.submit();
        }
    });

});





