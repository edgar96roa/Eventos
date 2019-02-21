<?php
	/* session_start();
	if($_SESSION["valido"] == "JAOR"){*/
	include("crud_BD.php");
	include("imgs.php");
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
		<script src="../js/anuario.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="verEvento.php">Escom <span>- IPN</span></a></div>
			</header>
            
			<section id="post" class="wrapper bg-img" data-bg="crearEvento.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Anuario</h2>
							<div id="infoAdmin">
                           		<?php echo $regFecha; ?>
                        	</div>
						</header>
						<div class="content">
							<div id="infoAdmin">
                        		<?php echo $html; ?>
                            </div>
						</div>
						<footer>
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