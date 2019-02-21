<?php
	session_start();
	if(isset($_SESSION["s_usuario"])){
		include("verEventoSedes_BD.php");
	}else{
		header("Location: http://localhost/EventosEscom/index.php");
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Escom - IPN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../pluginsFrameworks/materialize/css/materialize.min.css" />
		<link rel="stylesheet" href="../pluginsFrameworks/confirm/jquery-confirm.min.css" />
		<link rel="stylesheet" href="../pluginsFrameworks/validetta101/validetta.min.css" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.scrolly.min.js"></script>
		<script src="../js/jquery.scrollex.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/util.js"></script>
		<script src="../pluginsFrameworks/materialize/js/materialize.min.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/verEvento.js"></script>
		<script src="../pluginsFrameworks/validetta101/validetta.min.js"></script>
		<script src="../pluginsFrameworks/validetta101/localization/validettaLang-es-ES.js"></script>
		<script src="../pluginsFrameworks/confirm/jquery-confirm.min.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="administrador.php">ESCOM <span>- IPN</span></a></div>
			</header>
            
			<section id="banner" class="bg-img" data-bg="Excelencia.jpg">
				<div class="inner">
					<header>
						
					</header>
					<article class="box">
						<header>
							<h2>Excelencia</h2>
						</header>
						<div class="content">
							<ul class="icons">
								<li><a class="icon round fa-eye ver" data-ver="0">Ver</a></li>
								<li><a class="icon round fa-edit modificar">Modificar</a></li>
								<li><a class="icon round fa-trash-o eliminar" data-eliminar="0">Eliminar</a></li>
								<li><a class="icon round fa-list subir" data-subir="0">Subir Invitados</a></li>
								<li><a class="icon round fa-check confirmar" data-confirmar="0">Confirmar</a></li>
							</ul>
						</div>
					</article>
				</div>
				<a href="#one" class="more">Generacion</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="Generacion.jpg">
				<div class="inner">
					<header>
					
					</header>
					<article class="box">
						<header>
							<h2>Generación</h2>
						</header>
						<div class="content">
							<ul class="icons">
								<li><a class="icon round fa-eye ver" data-ver="1">Ver</a></li>
								<li><a class="icon round fa-edit modificar" data-modificar="1">Modificar</a></li>
								<li><a class="icon round fa-trash-o eliminar" data-eliminar="1">Eliminar</a></li>
								<li><a class="icon round fa-list subir" data-subir="1">Subir Invitados</a></li>
								<li><a class="icon round fa-check confirmar" data-confirmar="1">Confirmar</a></li>
								<li><a href="anuario.php" class="icon round fa-book">Anuario</a></li>
							</ul>
						</div>
					</article>
				</div>
				<a href="#footer" class="more">Footer</a>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="copyright">
						&copy; Untitled.
					</div>
				</div>
			</footer>
	</body>
	 <!-- Modal Structure -->
 	 <div id="modalVer" style="background-color: darkred" class="modal">
    	<div class="modal-content">
     		 <h4>Ver Evento</h4>
     		 <div id="ver" class="row">
     		 </div>
   		 </div>
  	  <div class="modal-footer">
      	<a class="modal-action modal-close waves-effect waves-green btn-flat">Ok !</a>
      </div>
  	</div>
          
      <div id="modalModificar" class="modal">
        <div class="modal-content">
          <h4 class="center-align red white-text">ESCOM - EVENTOS</h4>
            <form id="formModifica">
            <div class="row">
      
               	<input type="hidden" id="evento" name="evento">
                <input type="hidden" id="periodo" name="periodo" data-validetta="required">
           
              <div class="col s12 l6 input-field">
                <label for="primerApe">Fecha</label>
                <input type="text" id="fecha" name="fecha" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <label for="segundoApe">Hora</label>
                <input type="text" id="hora" name="hora" data-validetta="required">
              </div>
              <div class="col s12 l6 input-field">
                <select id="sede" name="sede" data-validetta="required">
                    <?php echo $sedeB; ?>
                </select>
                <label for="sexo">sede</label>
              </div>
              <div class="col s12 input-field">
                <button type="submit" class="btn red" style="width:100%;">Actualizar</button>
              </div>
            </div>
            </form>
        </div>
  	</div>    
          
      <div id="modalSubir" style="background-color: darkred" class="modal">
    	<div class="modal-content">
     		 <h4>Subir Lista de Invitados</h4>
     		 <div id="verS" class="row">
     		 </div>
     		 <div>
     		 	 <form id="formSub">
          			 <!--
           			 <input type="file" id="archivo" name="archivo" accept=".csv" data-validetta="required">
           			 <br><br><br>	
           			 <button type="submit">Subir</button>-->
           		  <input type="hidden" id="eventoS" name="evento">
           		  <label for="Lista de Invitados">Archivo:</label>
          		  <input type="file" id="archivo" name="archivo" accept=".csv" required/>
          		  <br>  <br>  
          		  <button type="submit">Subir</button>
       			 </form>
     		 </div>
   		 </div>
  	</div>     
          
	
</html>
<?php
	/*}else{
		header("location:../index.php");
	}*/
?>