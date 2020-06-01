<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <title>Inicio de Sesion</title>
    <meta name="keywords" content="sesion, cat, inicio" />
    <link rel="stylesheet" href="../cssAdmin/crearCuenta.css" rel="stylesheet">
    <script type="text/javascript" src="../jsAdmin/formularioJS.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nixie+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@300&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&family=Noto+Serif+JP:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php  
        session_start();
        if(!isset($_SESSION['isLogged'])|| $_SESSION['isLogged'] === false ){
            header("Location: ../../../../public/vista/paginasHTML/iniciarSesion.html");
        }
    ?>

    <header>
        <div class="logo">
            <a href="paginaAdmi.php" title="Ir a la Pagina principal" id="leftFloat"> <img src="../../../../config/Multimedia/images/LOGO.png" alt="Logo" style="width: 125px;"> </a>
            
            <div id="rightFloat"> 
                
                <nav id="menu">
                    <ol>       
                        <li><a href="agregar.php">Agregar</a> </li>
                        <li><a href="modificar.php">Modificar</a> </li>
                        <li><a href="eliminar.html">Eliminar</a> </li>
                        <li><a href="listarTelefonos.php">Buscar y Listar</a> </li>
                        <li><a href="contrasena.html">Cambio Contraseña</a> </li>
                        <li><a href="../../../../config/cerrarSesion.php">Cerrar Sesion</a> </li>
                    </ol> 
                </nav>

            </div>
        </div>
    </header>

    <div class="separador"> </div>

    <section>
        
        <article>
            <form id="formulario01" method="POST" action="../../../controladores/administrador/crear_usuario.php" onsubmit="return validarCamposObligatorios()">

                <!--
                    - onkeyup: Cuando se deja de presionar sobre alguna tecla
                    - onblur: Cuando se Seselecciona el elemento
                -->
        
                <label for="cedula">Cedula (*)</label>
                <input type="text" id="cedula" name="cedula" value="" placeholder="Ingrese el número de cedula" onkeyup="return validarNumeros(this)" onblur="return validacionCedula(this)"/>
                <p id="mensajeCedula" class="error"></p>
                
                <div class="separador"></div>
        
                <label for="nombres">Nombres (*)</label>
                <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres" onkeyup="return validarLetras(this)" onblur="return dividirCadenas(this, 'mensajeNombres')" />
                <p id="mensajeNombres" class="error"></p>
                
                <div class="separador"></div>
        
                <label for="apellidos">Apelidos (*)</label>
                <input type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos" onkeyup="return validarLetras(this)" onblur="return dividirCadenas(this, 'mensajeApellidos')"/>
                <p id="mensajeApellidos" class="error"></p>
                
                <div class="separador"></div>
        
                <label for="direccion">Dirección (*)</label>
                <input type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección" onblur="return validarDireccion(this)" />
                <p id="mensajeDireccion" class="error"></p>
              
                <div class="separador"></div>

                <label for="fecha">Fecha Nacimiento (*)</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="" placeholder="Ej.: 11/05/2020" onkeyup="return validacionCaracteresFecha(this)" />
                <p id="mensajeFecha" class="error"></p>
                
                <div class="separador"></div>

                <label for="correo">Correo electrónico (*)</label>
                <input type="email" id="correo" name="correo" value="" placeholder="Ej.: usuario@est.ups.edu.ec ó usuario@ups.edu.ec" " onkeyup="return validacionCaracteresCorreo(this)" onblur="return validacionCorreo(this)"  />
                <p id="mensajeCorreo" class="error"></p>

                <div class="separador"></div>

                <label for="correo">ROL (*)</label>
                <input type="text" id="rol" name="rol" value="" placeholder="Ingrese el rol admin o user" onblur="return validarROL(this)" />
                <p id="mensajeRol" class="error"></p>
                
                <div class="separador"></div>
        
                <label for="constrasena">Contraseña (*)</label>
                <input type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su contraseña" onkeyup="return validacionCaracteresContrasenia(this)" onblur="return validacionContrasenia(this)" />
                <p id="mensajePW" class="error"></p>
                
                <div class="separador"></div>
                
                <button  id="botonR" type="submit" id="Registrar" name="Registrar" value="Crear Cuenta">Crear Cuenta</button>
                <button id="botonC" type="submit" id="Cancelar" name="Cancelar" value="Cancelar" >Cancelar</button>
                
            </form>
        </article>

        
    </section>
        
<div class="separador"> </div>

    <footer class="footer">
        <!--A nivel de página sería la típica zona en la parte baja de la web, donde 
            se suelen incluir datos de contacto, enlaces, etc-->
        <div class="container6">

            <span class="btnFacebook">
                <img src="../../../../config/Multimedia/imagesCSS/facebook.png" alt="Acceder a la cuenta">
            </span>

            <span class="btnInstagram">
                <img src="../../../../config/Multimedia/imagesCSS/instagram.png" alt="Enviar mensaje">
            </span>

            <div class="estiloPiePagina">
                <div>
                    <a href="index.html" title="Ir a la Pagina principal">  
                        <img id="footerlogo" src="../../../../config/Multimedia/images/LOGO.png" alt="logo" > 
                    </a>
                </div>
                <p>
                    &#169;Todos los derechos reservados.
                </p>
            </div>
           
        </div>   
        
        
    </footer>
</body>
</html>
