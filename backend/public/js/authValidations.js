$('#login').validate({
    rules: {
        username: {
            required: true
        },
        password: {
          required: true
        }
    },
    messages: {
        username: {
            required: "El campo <strong>usuario</strong> es requerido"
        },
        password: {
            required: "El campo <strong>contraseña</strong> es requerido"
        }
    },
    highlight: function (element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: "span",
    errorClass: "help-block",
    errorPlacement: function (error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});
