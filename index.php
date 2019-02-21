<?php

?>
<!doctype html>
<html>

<head>
    <title>ESCOM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link type="text/css" rel="stylesheet" href="pluginsFrameworks/materialize/css/materialize.min.css" />
    <link type="text/css" rel="stylesheet" href="pluginsFrameworks/validetta101/validetta.min.js" />
    <link rel="stylesheet" type="text/css" href="pluginsFrameworks/confirm/jquery-confirm.min.js">
    <script src="js/jQuery.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>
    <script src="pluginsFrameworks/validetta101/validetta.min.js"></script>
    <script src="pluginsFrameworks/materialize/js/materialize.min.js"></script>
    <script src="pluginsFrameworks/validetta101/localization/validettaLang-es-ES.js"></script>
    <script src="pluginsFrameworks/confirm/jquery-confirm.min.js"></script>
    <script src="js/index.js"></script>

</head>

<body>
    <section id="banner" class="bg-img" data-bg="banner.jpg">
        <div class="inner">
            <header>
                <h1>Orgaizador de Eventos ESCOM</h1>
            </header>
        </div>
        <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
        <div class="inner">
            <article class="box">
                <div class="content">
                    <form id="formAcc">
                        <div class="col l4 s12 input-field">
                            <label for="usuario">Boleta / Empleado:</label>
                            <input type="text" id="usuario" name="usuario" data-validetta="required">
                        </div>
                        <div class="col l4 s12  input-field">
                            <label for="contrasena">Contrase&ntilde;a</label>
                            <input type="password" id="contrasena" name="contrasena" data-validetta="required">
                        </div>
                        <div class="col l4 s12  input-field">
                            <button id="entrar" type="submit" class="btn blue" style="width:100%;">Entrar</button>
                        </div>
                    </form>
                    <p>Si nunca haz cambiado tu contraseña sera tus primeras 4 letras de tu primer nombre</p>
                    <a class="waves-effect waves-light modal-trigger" href="#modalRecuperar">Si olvidaste tu contraseña da clic aqui</a>
                </div>
            </article>
        </div>
        <a href="#footer" class="more">Mas</a>
    </section>

    <!-- Footer -->
    <footer id="footer" style="background-color:#46546A">
        <div class="inner">

            <h2>Contáctanos</h2>
            <p>Tienes algun problema relacionado con el sitio contactanos de por este medio.</p>
            <form id="contacto">
                <div class="field half first">
                    <label for="name">Nombre</label>
                    <input name="name" id="name" type="text" data-validetta="required">
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" placeholder="Email de contacto" data-validetta="required">
                </div>
                <div class="field">
                    <label for="message">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" placeholder="Redacta aqui tu mensaje" data-validetta="required"></textarea>
                </div>
                <ul class="actions">
                    <button id="btnMensaje" type="submit" class="btn">Enviar Mensaje</button>
                </ul>
            </form>

            <ul class="icons">
                <li><a href="https://twitter.com/escomunidad?lang=es" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://es-la.facebook.com/escom.iscipn.9/" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
            </ul>
        </div>
    </footer>
    <div id="modalRecuperar" class="modal" style="background-color:whitesmoke">
        <div class="modal-content">
            <br>
            <h4 style="color: black">Recuperar Contraseña</h4>
            </br>
            <p style="color: black">Ingresa tu correo registrado al momento que accediste y se enviara a tu correo tu contraseña</p>
            <form id="recuperar">
                <div class="row">
                    <div class="col m6 s12  input-field">
                        <label>Boleta</label>
                        <input type="text" id="boletaRecuperar" name="boleta" data-validetta="required">
                    </div>
                    <div class="col m6 s12 input-field">
                        <label>E-Mail</label>
                        <input type="text" id="correoRecuperar" name="correo" data-validetta="required,email">
                    </div>
                </div>
                <div class="col l4 s12 input-field" align="center">
                    <button id="btnRecuperar" type="submit" class="btn">Recuperar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>