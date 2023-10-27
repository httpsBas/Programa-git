<?php

include ('db.php');

if(isset($_POST['btIngresar'])){
    $usuario = $_POST['user'];
    $contraseña  = $_POST['password'];

    $consulta = "SELECT * FROM usuario WHERE usuario.id_Usuario='$usuario';";
    $res = $conexion->query($consulta);

    if($res -> num_rows == 1){
        echo "listo";
    }
    else{
        echo "mal";
    }

}
$conexion->close();

?>

