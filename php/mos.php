<?php
  $inc= include("conexion.php");
  if($inc) {
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado){
      while($row = $resultado->fetch_array()){
        $id =  $row ['id'];
        $dni = $row['dni'];
        $nombre = $row['nombre'];
        $apellidoPaterno = $row['apellidoPaterno'];
        $apellidoMaterno = $row['apellidoMaterno'];
        $edad = $row['edad'];
        $correo = $row['correo'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        ?>

        <div>
          <h2>
            <?php echo $nombre; ?>
          </h2>
          <div>
            <p>
                  id : <?php echo $id; ?><br>
                  dni  : <?php echo $dni; ?><br>                 
                  nombre  : <?php echo $nombre; ?><br>
                  apellidoPaterno : <?php echo $apellidoPaterno; ?><br>
                  apellidoMaterno : <?php echo $apellidoMaterno; ?><br>
                  edad : <?php echo $edad; ?><br>
                  correo : <?php echo $correo; ?><br>
                  direccion : <?php echo $direccion; ?><br>
                  telefono  :  <?php echo $telefono; ?><br>
                  
            </p>
          </div>
        </div>



        <?php
      }
    }
  }

?>