$(document).ready(function(e) {
    $(".eliminar").click(function(e) {
	var boletaDel = $(this).attr("data-eliminar");
					$.ajax({
						method:"post",
						url:"../php/anuario_BD.php",
						cache:false,
						data:{boleta:boletaDel},
						success:function(respAX){
							if(respAX == 1){
								alert("El registro se eliminó correctamente");
							}else{
								alert("El registro se eliminó incorrectamente");
							}
						}
					})	
    });
	$(".close").click(function(e) {
	var boletaDel = $(this).attr("data-close");
					$.ajax({
						method:"post",
						url:"../php/anuario_BD2.php",
						cache:false,
						data:{boleta:boletaDel},
						success:function(respAX){
							if(respAX == 1){
								alert("El registro se eliminó correctamente");
							}else{
								alert("El registro se eliminó incorrectamente");
							}
						}
					})	
    });
});