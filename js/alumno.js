$(document).ready(function() {

    $('.modal').modal();

    $(".modifica").click(function(e) {
        var boleta = $(this).attr("data-boleta");
        $.ajax({
            method: "post",
            url: "alumnoReadUp_AX.php",
            data: {
                boletaUp: boleta
            },
            cache: false,
            success: function(respAX) {
                console.log(respAX);
                var obj = JSON.parse(respAX);
                $("#modalDatos #boleta").val(boleta);
                $("#modalDatos #correo").val(obj.correo);
                $("#modalDatos #telfijo").val(obj.telfijo);
                $("#modalDatos #telmovil").val(obj.telmovil);
                Materialize.updateTextFields();
                $("#modalDatos").modal("open");
            }
        });
    });


    $("#datosN").validetta({
        bubblePosition: "bottom",
        bubbleGapTop: 10,
        bubbleGapLeft: -5,
        onValid: function(e) {
            e.preventDefault();
            //	$("#formModifica").modal('close');
            $.ajax({
                method: "post",
                url: "alumnoModificar_AX.php",
                data: $("#datosN").serialize(),
                cache: false,
                success: function(respAX) {
                    console.log(respAX);
                    if (respAX == 1) {
                        $.alert({
                            title: "ESCOM - EVENTOS",
                            theme: 'dark',
                            content: "Se actualizó correctamente el evento",
                            type: "green",
                            useBootstrap: false,
                            boxWidth: "50%",
                            onClose: function() {
                                location.reload(true);
                            }
                        });
                    } else {
                        $.alert({
                            title: "ESCOM - EVENTOS",
                            theme: 'dark',
                            content: "No se pudo actualizar el evento. Vuelva a intentarlo",
                            type: "red",
                            useBootstrap: false,
                            boxWidth: "50%"
                        });
                    }
                }
            })
        }
    });

    $("#formSub").submit(function(e) {
        e.preventDefault();
        var formulario = new FormData($(this)[0]); //!IMPORTANT
        $.ajax({
            method: "post",
            url: "alumnoUploadAX.php",
            data: formulario,
            cache: false,
            processData: false, //!IMPORTANT
            contentType: false, //!IMPORTANT
            success: function(respAX) {
                console.log(respAX);
                if (respAX == 1) {
                    $.alert({
                        title: "ESCOM - EVENTOS",
                        theme: 'dark',
                        content: "Se actualizó tu foto correctamente",
                        type: "green",
                        useBootstrap: false,
                        boxWidth: "50%",
                        onClose: function() {
                            location.reload(true);
                        }
                    });
                } else {
                    $.alert({
                        title: "ESCOM - EVENTOS",
                        theme: 'dark',
                        content: "Hubo un error, Intentelo mas tarde",
                        type: "red",
                        useBootstrap: false,
                        boxWidth: "50%",
                        onClose: function() {
                            location.reload(true);
                        }
                    });
                }
            }
        });

    });

    $(".asistir").click(function(e) {
        var boleta = $(this).attr("data-boleta");
        $.confirm({
            title: "ESCOM - EVENTOS",
            theme: 'dark',
            content: "¿Desea confirmar tu asistencia?",
            type: "red",
            useBootstrap: false,
            boxWidth: "50%",
            buttons: {
                Confirmar: function() {
                    $.ajax({
                        method: "post",
                        url: "alumnoAsistencia_AX.php",
                        cache: false,
                        data: {
                            boletaUp: boleta
                        },
                        success: function(respAX) {
                            if (respAX == 1) {
                                $.alert({
                                    title: "ESCOM - EVENTOS",
                                    theme: 'dark',
                                    content: "Confirmaste el evento !!",
                                    type: "green",
                                    useBootstrap: false,
                                    boxWidth: "50%",
                                    onClose: function() {
                                        location.reload(true);
                                    }
                                });
                            } else {
                                console.log(respAX);
                            }
                        }
                    });
                },
                Cancelar: function() {}
            }
        });
    });

}); ///fin