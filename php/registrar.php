<?php
  include('conexion.php');
  if(isset($_POST['guardar'])){
  if(
    strlen($_POST['dni']) >= 1 &&
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['apellidoPaterno']) >= 1 &&
    strlen($_POST['apellidoMaterno']) >= 1 &&
    strlen($_POST['edad']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['direccion']) >= 1 &&
    strlen($_POST['telefono']) >= 1

    )  {
          $dni = trim($_POST['dni']);
          $nombre = trim($_POST['nombre']);
          $apellidoPaterno = trim($_POST['apellidoPaterno']);
          $apellidoMaterno = trim($_POST['apellidoMaterno']);
          $edad = trim($_POST['edad']);
          $correo = trim($_POST['correo']);
          $direccion = trim($_POST['direccion']);
          $telefono = trim($_POST['telefono']);

          $consulta = "INSERT INTO datos(dni,nombre,apellidoPaterno,apellidoMaterno,edad,correo,direccion,telefono)
            VALUES('$dni' , ' $nombre ' , '$apellidoPaterno ', '$apellidoMaterno ' , '$edad ' , '$correo '  ,  '$direccion ' , '$telefono ' )";
          
          $resultado = mysqli_query($conex,$consulta);

          if($resultado){
            ?>
              <h3 class='success' > Tu registro se a completo </h3>
            <?php
          }else{
            ?>
              <h3 class='error' > Ocurrio un error </h3>
              <?php
          }
    } else{
      ?>
          <h3 class='error' > Llena todos los campos </h3>
          <?php
    }


          
    
  }



?>