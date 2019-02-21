<?php
	session_start();
	if(isset($_SESSION["s_usuario"])){
	include("crearEvento_BD.php");
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
		<script src="../pluginsFrameworks/validetta101/validetta.min.js"></script>
		<script src="../pluginsFrameworks/validetta101/localization/validettaLang-es-ES.js"></script>
        <script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.scrolly.min.js"></script>
		<script src="../js/jquery.scrollex.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/util.js"></script>
		<script src="../js/main.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="../indexAdmin.php">ESCOM <span>- IPN</span></a></div>
			</header>
            
			<section id="one" class="wrapper post bg-img" data-bg="CrearEvento.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Crear Evento</h2>
						</header>
						<div class="content">
							<!-- Form -->
                            <form method="POST" action="datos.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Periodo" id="Periodo" value="" placeholder="Periodo" data-validetta="required"/>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<div class="select-wrapper">
												<select name="Evento" id="Evento" data-validetta="required">
													<option value="0">Excelencia Academica</option>
													<option value="1">Generación</option>
												</select>
											</div>
										</div>
										<!-- Break -->
										<div class="12u$">
											<div class="select-wrapper">
												<select name="Sede" id="Sede" data-validetta="required">
													<div id="Lugares">
                           								<?php echo $regEst; ?>
                        							</div> 
												</select>
											</div>
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Fecha" id="Fecha" value="" placeholder="Fecha" data-validetta="required"/>
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="Hora" id="Hora" value="" placeholder="Hora" data-validetta="required"/>
										</div>
									</div>
                        </div>
						<footer>
							<ul class="actions">
								<button type="submit" class="btn">Aceptar</button>
                                </form>
							</ul>
						</footer>
					</article>
				</div>
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
</html>
<?php
	/*}else{
		header("location:../index.php");
	}*/
?>