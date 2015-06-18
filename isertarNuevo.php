<?php

$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['mail2'];
$dni=$_POST['usuario'];
$pass= $_POST['pass'];
$rpass=$_POST['rpass'];
$categor=$_POST['categoria'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

require("conexionBD.php");
if ($categoria="Administrador") {
        $checkusuario=mysql_query("SELECT * FROM tusuarios");
        $checkadministrador=mysql_query("SELECT * FROM tadministrador");
        $check_usuario=mysql_num_rows($checkusuario);
        $check_administrador=mysql_num_rows($checkadministrador);
        if($pass==$rpass){
            if( $check_administrador>0){
                echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
            }
            else{

                //require("connect_db.php");
                mysql_query("INSERT INTO tusuarios VALUES('','$pass','ADMINISTRADOR')");
                mysql_query("INSERT INTO tadministrador VALUES('$dni','','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail')");
                //echo 'Se ha registrado con exito';
                echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
                mysql_close($link);
            }

        }else{
            echo 'Las contraseñas son incorrectas';
        }
}



?>