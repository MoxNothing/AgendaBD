<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial.scare=1.0">
        <meta name="description" content="Registro de contactos">
        <meta name="keywords" content="registro reportes formularios">
        <meta name="authors" content="users">
        <title>Registro</title>
        <link rel="stylesheet" href="css/registro.css">
    </head>
    <body>
        <nav class='navv'>
            <div class="navicon">
              <div></div>
            </div>
              <ul>
                 <li><a href='bienvenida.php'`>Inicio</a></li>
                <li><a href='Registro de contactos.php'>Registro</a></li>
                <li><a href='mostrar.php'>Mostrar</a></li>
                <li><a href='log.php'>Salir</a></li>
                
              </ul>
        </nav>
        <div class="registro">
        <form class="regis" method="post">
            <h1 class='titulo'>Registro de Contactos</h1>
            <label class='label' for="dni">DNI:</label>
            <input class='input' type="text" id="dni" name="dni"><br>

            <label class='label' for="nombre">Nombre:</label>
            <input class='input' type="text" id="nombre" name="nombre"><br>

            <label class='label' for="apellidoPaterno">Apellido Paterno:</label>
            <input class='input' type="text" id="apellidoPaterno" name="apellidoPaterno"><br>

            <label class='label' for="apellidoMaterno">Apellido Materno:</label>
            <input class='input' type="text" id="apellidoMaterno" name="apellidoMaterno"><br>

            <label class='label' for="edad">Edad:</label>
            <input class='input' type="number" id="edad" name="edad"><br>

            <label class='label' for="correo">Correo Electrónico:</label>
            <input class='input' type="email" id="correo" name="correo"><br>

            <label class='label' for="direccion">Dirección:</label>
            <input class='input' type="text" id="direccion" name="direccion"><br>

            <label class='label' for="telefono">Teléfono:</label>
            <input class='input' type="tel" id="telefono" name="telefono"><br>
                    
            <input class='boton' type="submit" name='guardar' value="Guardar">
            <input class='boton' type="submit" value="Limpiar">
        </div>
        </form>

        <?php
                include('registrar.php');
        ?>


    </body>
</html>
