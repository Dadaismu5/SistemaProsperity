$('#form').validate({
    rules: {
        "customer[name]": {
            required: true
        },
        "customer[email]": {
          required: true,
          email: true
        },
        "customer[address]": {
            required: true
        },
        "customer[phone]": {
            required: true
        }
    },
    messages: {
        "customer[name]": {
            required: "El campo <strong>nombre</strong> es requerido"
        },
        "customer[email]": {
            required: "El campo <strong>email</strong> es requerido",
            email: "El campo <strong>email</strong> es invalido",
        },
        "customer[address]": {
            required: "El campo <strong>dirección</strong> es requerido",
            email: "El campo <strong>dirección</strong> es invalido",
        },
        "customer[phone]": {
          required: "El campo <strong>teléfono</strong> es requerido"
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



function load_image(idCustomer, idImage)
{
    //información del formulario
    var formData = new FormData($(".form-horizontal")[0]);

    var inputFileImage = document.getElementById(idImage);
    var file = inputFileImage.files[0];
    formData.append('documentation', file);
    formData.append('idCustomer', idCustomer);
    formData.append('type', idImage);

    if (file != undefined) {
        
        //hacemos la petición ajax  
        $.ajax({
            url: '/customer/documentation',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            //mientras enviamos el archivo
            beforeSend: function(){
                $("#upload_" + idImage).show();
            },
            //una vez finalizado correctamente
            success: function(data){
                if (data.exito) {
                    $("#check_" + idImage).html("<a href='/documentations/" + idCustomer + "/" + data.filename+"' download='/documentations/" + idCustomer + "/" + data.filename+"'><i class='fa fa-file-text fa-2x'></i></a>");
                    $("#" + idImage).val('');

                }
                
                $("#upload_" + idImage).hide();
            },
            //si ha ocurrido un error
            error: function(){
                $("#upload_" + idImage).hide();
            }
        });

        
    }
}


/*
$("#request_credit").change(function() {
    //información del formulario
    var formData = new FormData($(".form-horizontal")[0]);

    var inputFileImage = document.getElementById("request_credit");
    var file = inputFileImage.files[0];
    formData.append('request_credit',file);
    formData.append('request_credit',file);

    if (file != undefined) {
        console.log(file);

        //hacemos la petición ajax  
        $.ajax({
            url: 'customer/user/logotipo',  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            //mientras enviamos el archivo
            beforeSend: function(){
                $("#error_perfil").hide();
                $("#validate").show();
            },
            //una vez finalizado correctamente
            success: function(data){
                if (data.exito) {

                    if (data.valida) {
                        $("#validate").hide();
                        $(".jcrop-holder").show();
                        $("#preview-perfil").attr("src", $("#img-parent .jcrop-holder img").attr("src"));
                        boundx = data.width;
                        boundy = data.height;

                        if(boundy <= 80 && boundx <= 80) {
                            JcropAPI = $('#myModal1 .fileinput-preview #img-preview').data('Jcrop');
                            JcropAPI.destroy();
                        }

                        $('#coordenada_x').val("");
                        $('#coordenada_y').val("");
                        $('#coordenada_x2').val("");
                        $('#coordenada_y2').val("");
                        $('#coordenada_w').val("");
                        $('#coordenada_h').val("");
                    } else {
                        remove();
                    }
                }
            },
            //si ha ocurrido un error
            error: function(){
                remove();
            }
        });
        
    }
});

*/
