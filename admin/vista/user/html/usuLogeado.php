<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarioLogeado</title>
    <link rel="stylesheet" href="../css/paginaPrincipal.css">
    <script src="../js/listar.js" type="text/javascript"></script>
     
</head>
<body background="../../../../config/Multimedia/imagenesParaSesion/fondoUsuario.png">

<?php  
    session_start();
    if(!isset($_SESSION['isLogged'])|| $_SESSION['isLogged'] === false ){
        header("Location: ../vista/paginasHTML/iniciarSesion.html");
    }
    $correo = $_SESSION['nombre_usuario'];  
?>

    <header >
        <div class="logo" >
            <a href="index.html" title="Ir a la Pagina principal"> <img src="../../../../config/Multimedia/images/LOGO.png" alt="Logo" id="leftFloat" width="78px" height="78px"> </a>
         </div>
         </header>

  <form class="menuHorizontal" id= "menu"> 
    <input type="button"  id="agregar" name="agregar" value="AGREGAR" onclick=" return elegir(this )">
    <input type="button"  id="modificar" name="modificar" value="MODIFICAR" onclick ="return elegir(this)">
    <input type="button"  id="buscar" name="buscar" value="BUSCAR" onclick ="return elegir(this) " >
    <input type="button"  id="eliminar" name="eliminar" value="ELIMINAR" onclick ="return elegir(this)" >  
    <input type="button"  id="cuenta" name="cuenta" value="CUENTA" onclick ="return elegir(this)"  > 
   </form> 
   <div class="separador"> 
       
   <form id="Formulario01" onsubmit="return buscarPorCedula()" style="display: inline;">
                <input type="text" id="cedula" name="cedula" value="" onkeyup="return buscarPorCedula()" onblur="buscarPorCedula()">
                <input type="button" id="buscarCed" name="buscarCed" value="Buscar" onclick="buscarPorCedula()">
            </form>
   
   

        
</body>
</html>