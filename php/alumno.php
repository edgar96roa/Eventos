<?php
   session_start();
   if(isset($_SESSION["s_usuario"])){
   	include("alumnoRead_AX.php");
   	include("alumnoReadBotones_AX.php");
   }else{
   	header("Location: http://localhost/EventosEscom/index.php");
   }
   ?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>ESCOM</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css" href="../css/responsive.css">
      <link rel="stylesheet" type="text/css" href="../css/posiciones.css">
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../pluginsFrameworks/materialize/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="../css/main.css" />
      <link rel="stylesheet" type="text/css" href="../pluginsFrameworks/validetta101/validetta.min.css" />
      <link rel="stylesheet" type="text/css" href="../pluginsFrameworks/confirm/jquery-confirm.min.css" />
      <script src="../js/jquery.min.js"></script>
      <script src="../pluginsFrameworks/materialize/js/materialize.min.js"></script>
      <script src="../js/jquery.scrolly.min.js"></script>
      <script src="../js/jquery.scrollex.min.js"></script>
      <script src="../js/skel.min.js"></script>
      <script src="../js/util.js"></script>
      <script src="../js/main.js"></script>
      <script src="../js/alumno.js"></script>
      <script src="../pluginsFrameworks/validetta101/validetta.min.js"></script>
      <script src="../pluginsFrameworks/confirm/jquery-confirm.min.js"></script>
   </head>
   <body class="subpage">
      <header id="header" class="alt">
         <div class="logo"><a href="index.html"></a></div>
      </header>
      <section id="post" class="wrapper bg-img" data-bg="banner2.jpg">
         <div class="inner">
            <article class="box">
               <header>
                  <div class="row">
       
                     <div class="row">
                        <div class="col-l-12 col-m-12">
                           <ul class="actions vertical">
                              <a class="waves-effect waves-light btn red modifica" data-boleta="<?php echo $_SESSION["s_usuario"] ?>">Actualizar Datos</a>
                           </ul>
                        </div>
                        <div class="col-l-12 col-m-12">
                           <ul class="actions vertical">
                              <a class="waves-effect waves-light btn red modal-trigger" href="#upFoto" data-boleta="<?php echo $_SESSION["s_usuario"] ?>">Actualizar Foto</a>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <p><?php echo date("d-m-Y")?></p>
               </header>
               <div class="content fila">
                  <div class="col-l-6 col-m-12 ">
                     <h2><i class="fa fa-user"></i> Foto</h2>
                     <p><img src="../images/alumno/<?php echo $_SESSION["s_usuario"] ?>.jpg" height="200" width="200"></p>
                     <h2><i class="fa fa-list"></i> Datos del evento</h2>
                     <?php echo $datosEvento; ?> 
                     <ul class="actions">
                        <li><a id="confirmar" class="button special asistir <?php echo $Boton; ?>" data-boleta=<?php echo $_SESSION["s_usuario"] ?> >Confirmar asistencia</a></li>
                     </ul>
                  </div>
                  <div class="col-l-6 col-m-12">
                     <h2><i class="fa fa-map-marker"></i> Ubicaci&oacute;n</h2>
                     <iframe src="<?php echo $maps; ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                  <div class="col-l-6 col-m-12">
                     <ul class="actions vertical">
                        <li><a href="#" class="button special <?php echo $Boton; ?>">Descargar anuario</a></li>
                     </ul>
                  </div>
               </div>
            </article>
         </div>
      </section>
      <!-- Footer -->
      <footer id="footer">
         <div class="inner">
            <div class="copyright right">
               &copy; Untitled.
            </div>
         </div>
      </footer>
   </body>
   <!-- Modal Structure -->
   <div id="modalDatos" class="modal">
      <div class="modal-content black">
         <h2>Actualizar Datos</h2>
         <h3>
            <?php echo $nombre ?>
         </h3>
         <form id="datosN">
            <div class="row">
               <input type="hidden" id="boleta" name="boleta">
               <div class="col s12 l6 input-field">
                  <label for="primerApe">Correo</label>
                  <input type="text" id="correo" name="correo" data-validetta="required,email">
               </div>
               <div class="col s12 l6 input-field">
                  <label for="segundoApe">T&eacute;lefono Fijo</label>
                  <input type="text" id="telfijo" name="telfijo" data-validetta="required">
               </div>
               <div class="col s12 l6 input-field">
                  <label for="segundoApe">T&eacute;lefono Movil</label>
                  <input type="text" id="telmovil" name="telmovil" data-validetta="required">
               </div>
               <div class="col s12 input-field">
                  <button type="submit" class="btn blue-grey" style="width:100%;">Actualizar</button>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div id="upFoto" class="modal">
      <div class="modal-content black">
         <h4>Actualiza tu Foto!!</h4>
         <div>
            <form id="formSub">
               <!--
                  <input type="file" id="archivo" name="archivo" accept=".csv" data-validetta="required">
                  <br><br><br>	
                  <button type="submit">Subir</button>-->
               <input type="hidden" id="boleta" name="boleta">
               <label for="Imagen">Archivo:</label>
               <input type="file" id="archivo" name="archivo" accept=".jpg" required/>
               <br>  <br>  
               <button type="submit">Subir</button>
            </form>
         </div>
      </div>
   </div>
</html>