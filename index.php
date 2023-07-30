<?php

session_start();

if (isset($_SESSION['usuario'])) {

    header("location: bienvenido.php");

}

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
    <link rel="shortcut icon" href="./imagenes/girl.ico" type="image/x-icon">
    <title>Login y Registro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- TIPOGRAFIA ROBOTO -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia seccion para entrar en la pagina</p>
                    <button id="btn__iniciar-seccion">Iniciar Seccion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar seccion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- Formulario de Login y Register -->
            <div class="contenedor__login-register">
                <!-- Formulario de Login  -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <center><img src="./imagenes/girl.ico" alt="girl" width="60"></center>
                    <h2>Iniciar Seccion</h2>
                    <input type="text" name="correo" placeholder="Correo Electronico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button id="btn_entrar" onclick=redireccionar ">Entrar</button>
                </form>
                <!-- Formulario de   Register -->
                <form action=" php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <center><img src="./imagenes/Kim.ico" alt="girl" width="60"></center>
                        <h2>Registrarse</h2>
                        <input type="text" name="nombre_completo" placeholder="Nombre Completo" required>
                        <input type="text" name="correo" placeholder="Correo Electronico" required>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                        <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./js/script.js"></script>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
    // ]]>
    </script>
</body>

</html>