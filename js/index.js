 $(document).ready(function() {
     $('.modal').modal();
     $("#formAcc").validetta({
         bubblePosition: 'bottom',
         bubbleGapTop: 10,
         bubbleGapLeft: -5,
         onValid: function(e) {
             e.preventDefault();
             $.ajax({
                 method: "post",
                 url: "php/index_AX.php",
                 cache: false,
                 data: $("#formAcc").serialize(),
                 success: function(respAX) {
                     var obj = JSON.parse(respAX);
                     if (respAX == 0) {
                         $.alert({
                             title: 'Error!',
                             content: 'Usuario o contraseña incorrecta!',
                         });
                     } else if (obj.Tipo == 'ADM') {
                         location.href = "http://localhost/EventosEscom/php/administrador.php";
                     } else {
                         location.href = "http://localhost/EventosEscom/php/alumno.php";
                     }
                 }
             });

         }
     });

     $("#recuperar").validetta({
         bubblePosition: 'bottom',
         bubbleGapTop: 10,
         bubbleGapLeft: -5,
         onValid: function(e) {
             e.preventDefault();
             $.ajax({
                 method: "post",
                 url: "php/indexCorreoRecuperaAX.php",
                 cache: false,
                 data: $("#recuperar").serialize(),
                 success: function(respAX) {
                     console.log(respAX);
                     if (respAX == "0|") {
                         $.alert({
                             theme: 'dark',
                             title: 'Error!',
                             content: 'Usuario o contraseña incorrecta!',
                         });
                     } else if (respAX == "1|") {
                         $("#modalRecuperar").modal('close');
                         $.alert({
                             theme: 'dark',
                             title: 'Hecho!',
                             content: 'Tu contraseña ha sido enviada a tu correo!',
                         });
                     } else if (respAX == "2|") {
                         $("#modalRecuperar").modal('close');
                         $.alert({
                             theme: 'dark',
                             title: 'Upss!',
                             content: 'Estamos experimentando fallos, por favor intentelo mas tarde!',
                         });
                     }
                 }
             });
         }
     });

     $("#contacto").validetta({
         bubblePosition: 'bottom',
         bubbleGapTop: 10,
         bubbleGapLeft: -5,
         onValid: function(e) {
             e.preventDefault();
             $.ajax({
                 method: "post",
                 url: "php/indexCorreoContactoAX.php",
                 cache: false,
                 data: $("#contacto").serialize(),
                 success: function(respAX) {
                     console.log("Respuesta: " + respAX);
                     if (respAX == "1|") {
                         $.alert({
                             theme: 'dark',
                             title: 'Hecho!',
                             content: 'Tu mensaje se ha enviado, pronto te contestaremos!',
                         });
                     } else {
                         $.alert({
                             theme: 'dark',
                             title: 'Upss!',
                             content: 'Estamos experimentando fallos, por favor intentelo mas tarde!',
                         });
                     }
                 }
             });
         }
     });
 });  