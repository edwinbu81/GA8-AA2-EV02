<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("locatio: menu_tienda.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>

    <main>
        <div class="container-all">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina</p>
                    <button id= "btn_iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja_trasera-registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para puedas iniciar sesión</p>
                    <button id= "btn_registrar">Registrar</button>
                </div>
            </div>
<!-- formulario de login y registro -->
        <div class="contenedor_login-registro">
            <!--  login  -->
            <form action="php/login_usuario_be.php" method="POST" class="formulario-login">
                <h2> Iniciar Sesión </h2>
                <input type="text" placeholder="Correo electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>
            <!--  registro -->
            <form action="php/registro_usuario_be.php"method="POST" class="formulario-registro">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Cedula" name="cedula">
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="Apellidos" name="apellidos">
                <input type="text" placeholder="Correo" name="correo">
                <input type="text" placeholder="Telefono" name="telefono">
                <input type="text" placeholder="Direccion" name="direccion">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Registrarse</button>
            </form>

    </main>

    <script src="assets/js/script.js"></script>   
</body>
</html>