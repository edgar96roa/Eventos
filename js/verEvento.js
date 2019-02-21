$(document).ready(function(){
    $('.modal').modal();
	$('select').material_select();  
	$(".ver").click(function(e) {
		var evento = $(this).attr("data-ver");
		$.ajax({
			method:"post",
			url:"verEventoVer_AX.php",
			cache:false,
			data:{evento:evento},
			success: function(respAX){
				var obj = JSON.parse(respAX);
				if(respAX == 0){
					alert("No hay Eventos");
				}else{
			        var cadenaHTML = "<p class='flow-text'><b>Periodo del Evento: </b>"+obj.Periodo+"</p><p class='flow-text'> <b>Fecha del Evento: </b>"+obj.Fecha+"</p><p class='flow-text'><b>Hora: </b>"+obj.Hora+"</p><p class='flow-text'> <b>Sede: </b>"+obj.Sede+"</p>";
					$("#ver").html(cadenaHTML);
					$("#modalVer").modal("open");
				}
				
			}
		});
    }); 
	  	
	  
	$(".modificar").click(function(e) {
        var eventoUp = $(this).attr("data-modificar");
		$.ajax({
			method:"post",
			url:"verEventoVer_AX.php",
			data:{evento:eventoUp},
			cache:false,
			success: function(respAX){
				var obj = JSON.parse(respAX);
				$("#modalModificar #evento").val(eventoUp);
				$("#modalModificar #periodo").val(obj.Periodo);
				$("#modalModificar #fecha").val(obj.Fecha);
				$("#modalModificar #hora").val(obj.Hora);
				$("#modalModificar #sexo").material_select();
				Materialize.updateTextFields();
				$("#modalModificar").modal("open");
			}
		});
    });
	 
	 $("#formModifica").validetta({
		bubblePosition:"bottom", bubbleGapTop:10, bubbleGapLeft:-5,
		onValid:function(e){
			e.preventDefault();
		//	$("#formModifica").modal('close');
			$.ajax({
				method:"post",
				url:"verEventoModificar_AX.php",
				data:$("#formModifica").serialize(),
				cache:false,
				success: function(respAX){
					if(respAX == 1){
						$.alert({
							title:"ESCOM - EVENTOS",
							theme: 'dark',
							content:"Se actualizó correctamente el evento",
							type:"green",
							useBootstrap:false,
							boxWidth:"50%",
							onClose:function(){
								location.reload(true);
							}
						});
					}else{
						$.alert({
							title:"ESCOM - EVENTOS",
							theme: 'dark',
							content:"No se pudo actualizar el evento. Vuelva a intentarlo",
							type:"red",
							useBootstrap:false,
							boxWidth:"50%"
						});
					}
				}
			})
		}
	});
	  
	$(".eliminar").click(function(e) {
        var eventoDel = $(this).attr("data-eliminar");
		$.confirm({
			title:"ESCOM - EVENTOS",
			theme: 'dark',
			content:"Desea eliminar el eveto",
			type:"red",
			useBootstrap:false,
			boxWidth:"50%",
			buttons:{
				confirm:function(){
					$.ajax({
						method:"post",
						url:"verEventoEliminar_AX.php",
						cache:false,
						data:{evento:eventoDel},
						success:function(respAX){
							if(respAX == 1){
								$.alert({
									title:"ESCOM - EVENTOS",
									content:"El evento se eliminó correctamente",
									type:"green",
									useBootstrap:false,
									boxWidth:"50%",
									onClose:function(){
										location.reload(true);
									}
								})
							}else{
								$.alert({
									title:"ESCOM - EVENTOS",
									theme: 'dark',
									content:"Se presentaron problemas en la operación. Vuelve a intentarlo",
									type:"red",
									useBootstrap:false,
									boxWidth:"50%"
								})
							}
						}
					})
				},
				cancel:function(){
					//
				}
			}
		});
    });
	$(".confirmar").click(function(e) {
        var eventoC = $(this).attr("data-confirmar");
		$.confirm({
			title:"ESCOM - EVENTOS",
			theme: 'dark',
			content:"Desea confirmar el eveto, esta accion notificara a todos los alumnos sobre el evento",
			type:"red",
			useBootstrap:false,
			boxWidth:"50%",
			buttons:{
				Confirmar:function(){
					$.ajax({
						method:"post",
						url:"verEventoConfirmar_AX.php",
						cache:false,
						data:{evento:eventoC},
						success:function(respAX){
							console.log("Respuesta: "+respAX);
							if(respAX == "true"){
								$.alert({
									title:"ESCOM - EVENTOS",
									theme: 'dark',
									content:"El evento se confirmado correctamente",
									type:"green",
									useBootstrap:false,
									boxWidth:"50%",
									onClose:function(){
										location.reload(true);
									}
								})
							}else{
								$.alert({
									title:"ESCOM - EVENTOS",
									theme: 'dark',
									content:"Se presentaron problemas en la operación. Vuelve a intentarlo",
									type:"red",
									useBootstrap:false,
									boxWidth:"50%"
								})
							}
						}
					})
				},
				Cancelar:function(){
					//
				}
			}
		});
    });
	
	$(".subir").click(function(e) {
        var eventoUp = $(this).attr("data-subir");
		$.ajax({
			method:"post",
			url:"verEventoVer_AX.php",
			data:{evento:eventoUp},
			cache:false,
			success: function(respAX){
				var obj = JSON.parse(respAX);
				if(respAX == 0){
					alert("No hay Eventos");
				}else{
			        var cadenaHTML = "<p'><b>Periodo del Evento: </b>"+obj.Periodo+"</p><p> <b>Fecha del Evento: </b>"+obj.Fecha+"</p><p><b>Hora: </b>"+obj.Hora+"</p><p> <b>Sede: </b>"+obj.Sede+"</p>";
					$("#modalSubir #eventoS").val(eventoUp);
					$("#verS").html(cadenaHTML);
					$("#modalSubir").modal("open");
				}
				
			}
		});
    });
	
	$("#formSub").submit(function(e){
                    e.preventDefault();
                    var formulario = new FormData($(this)[0]); //!IMPORTANT
                    $.ajax({
                        method:"post",
                        url:"verEventoSubirEX_AX.php",
                        data:formulario,
                        cache:false,
                        processData:false, //!IMPORTANT
                        contentType:false, //!IMPORTANT
                        success:function(respAX){
						console.log(respAX);
                            if(respAX == 0){
								$("#modalSubir").modal('close');
                                alert("ERROR");
								
                            }else{
								$("#modalSubir").modal('close');
                                alert("Quedo");
                            }
                        }
                    })
		
                })
	
	
  }); //FIN

