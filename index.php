
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/styles.css">
    <title>SESION</title>
</head>
<body onload="borrarDatos()">   
    <div class="contentA">
    
    <div class="container">
        <div class="izquierda">
            <h1>Menu</h1>
            <ul>
                <li><button id="BtnPaneles">BIENVENIDA</button></li>
                <li><button class="temas-panel"id="BtnPaneles">TEMAS</Button></li>
                <div class="panelTemas">
                    <ul>
                        <li><a href="./views/saludPsicologica.html">Salud Mental</a></li>
                        <li><a href="">Terapia Online</a></li>
                        <li><a href="">Libros de Psicología</a> </li>
                        <li><a href="">Autoayuda</a></li>
                        <li><a href="">Pruebas Psicométricas</a></li>
                        <li><a href="">Ansiedad</a></li>
                        <li><a href="">Depresión</a></li>
                        <li><a href="">Personas Tóxicas</a></li>
                        <li><a href="">Psicología de Pareja</a></li>
                        <li><a href="">Psicología Infantil</a></li>
                        <li><a href="">Psicología Juveni</a>l</li>
                        <li><a href="">Psicologia Laboral</a></li>
                        <li><a href="">Adicciones</a></li>
                        <li><a href="">Sexologia</a></li>
                    </ul>
                </div>
                <li><button class="nosotros-panel" id="BtnPaneles">NOSOTROS</button></li>
                <div class="panelNosotros">
                    <ul>
                        <li>Acerca de</li>
                    </ul>
                </div>
            </ul>
        </div>
      <div class="formulario"> 
      <div class="titulo">
    <h1>CREAR CUENTA</h1>
    </div> 
        <div class="formLink">
        <div class="interior1">
    <form action="crearUsuario.php" method="post" class="formularioCuenta" id="form">
    <span>NOMBRE</span><input type="text" id="nombre"name="NOMBRE" required>
    <span>APELLIDO PATERNO</span><input type="text" id="app"name="APELLIDO_P" required>
    <span>APELLIDO MATERNO</span><input type="text" id="apm"name="APELLIDO_M" required>
    <span>SEXO</span><select name="SEXO" id="sexo" required>
        <option value="" id="sexo"></option>
        <option value="MASCULINO" id="sexo">Masculino</option>
        <option value="FEMENINO" id="sexo">Femenino</option>
        <option value="PREFIERO NO DECIR" id="sexo">Prefiero no decir</option>
    </select>
    <span>CORREO</span><input type="email" id="correo"name="CORREO" required>
    <span>USUARIO</span><input type="text" id="user"name="USUARIO" required> 
    <span>CONTRASEÑA</span><input type="password" id="pass"name="PASS" required> 
    <label for=""><input type="checkbox" id="chk"> Ver contraseña <br>   
    <button type="submit" id="Btnregistrar">REGISTRAR</button>
    <article id="texto"></article>
    
    </form>        
    </div>
    <div class="interior2">
        CUENTAS CON ALGUNA CUENTA?
        <div class="links">
            <hr>
        <a href="IniciarSesion.php" id="linkIniciar">INICIAR SESION</a> 
        <hr>
        </div>
       
    </div>
        </div>          
    </div>   
    <div class="derecha">

    </div>   
    </div>
    </div>
   
<script src="Js/app.js"></script>
</body>
</html>