<?php
	session_start();
	if(isset($_SESSION["s_usuario"])){
		include("crud_BD.php");
	}else{
		header("Location: localhost/EventosEscom/index.php");
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Escom - IPN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/main.css" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.scrolly.min.js"></script>
		<script src="../js/jquery.scrollex.min.js"></script>
		<script src="../js/skel.min.js"></script>
		<script src="../js/util.js"></script>
		<script src="../js/main.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">ESCOM <span>- IPN</span></a></div>
			</header>
            
			<section id="banner" class="bg-img" data-bg="../images/Escom.jpg">
				<div class="inner">
					<header>
						<div id="infoAdmin">
                           	<?php echo $regEst; ?>
                        </div> 
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="Escom_A.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Que deseas hacer el dia de hoy?</h2>
							<div id="fecha">
                           		<?php echo $regFecha; ?>
                        	</div>
						</header>
						<footer>
							<a href="crearEvento.php" class="button alt">Crear Evento</a>
							<a href="verEvento.php" class="button alt">Ver Evento</a>
						</footer>
					</article>
				</div>
				<a href="#footer" class="more">Learn More</a>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<div class="copyright">
						&copy; Untitled.
					</div>
				</div>
			</footer>

		<!-- Scripts -->

	</body>
</html>
<?php
	/*}else{
		header("location:../index.php");
	}*/
?>