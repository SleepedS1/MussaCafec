<?php

include("conexion.php");

if (isset($_POST['contact'])) {
    if (
        strlen($_POST['name'])>= 1 &&
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['phone']) >= 1 && 
        strlen($_POST['message']) >= 1
        ) {

            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, telefono, mensaje, fecha)
            VALUES('$name','$email','$phone','$message','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <script>alert("Tu registro se ha completado")</script>
                <?php
            } else{
                ?>
                    <script>alert("Ha ocurrido un problema")</script>
                <?php
            }
    }  else {?> <script>alert("Debe llenar todos los campos")</script> <?php
}
}

?>