<?php


require("conexionBD.php");

$username=$_POST['usuario'];
//	$username=$_POST['mail'];
$pass=$_POST['pass1'];

session_start();
$_SESSION['usuario']=$username;
$_SESSION['clave']=$pass;



/*----ADMINISTRADOR-----*/
/*$sql2=mysql_query("SELECT * FROM tadministrador WHERE idadministrador ='$username'");*/
/*$sql3=mysql_query("SELECT * FROM tusuario INNER JOIN tadministrador ON tusuario.idusuario = tadministrador.idusuario");
if($f2=mysql_fetch_array($sql3)){
    if($pass==$f2['password']){
        if($username==$f2['idadministrador'])
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';

        echo "<script>location.href='indexadministrador.php'</script>";

    }
}

/*----AUXILIAR----*/
/*$sql5=mysql_query("SELECT * FROM tusuario INNER JOIN tauxiliar ON tusuario.idusuario = tauxiliar.idusuario");
if($f4=mysql_fetch_array($sql5)){
    if($pass==$f4['password']){
        if($username==$f4['idauxiliar'])
            echo '<script>alert("BIENVENIDO AUXILIAR")</script> ';

        echo "<script>location.href='index2336.php'</script>";

    }
}


/*----APODERADO----*/
//$sql4=mysql_query("SELECT * FROM tusuario INNER JOIN tapoderado ON tusuario.idusuario = tapoderado.idusuario");
/*$sql4=mysql_query("SELECT * from tusuario INNER JOIN tapoderado on tusuario.idusuario = tapoderado.idusuario WHERE tapoderado.idapoderado ='$username'");
if($f3=mysql_fetch_array($sql4)){
    if($pass==$f3['password']){
        if($username==$f3['idapoderado'])
        {
            echo '<script>alert("BIENVENIDO PADRE DE FAMILIA")</script> ';
            echo "<script>location.href='indexapoderado.php'</script>";
        }
    }
}

/*----DOCENTE----*/
$sql=mysql_query("SELECT * from tusuario INNER JOIN tdocente on tusuario.idusuario = tdocente.idusuario WHERE tdocente.iddocente ='$username'");
//$sql4=mysql_query("SELECT * FROM tusuario INNER JOIN tdocente ON tusuario.idusuario = tdocente.idusuario");
if($f3=mysql_fetch_array($sql)){
    if($pass==$f3['password']){
        if($username==$f3['iddocente'])
        {
            echo '<script>alert("BIENVENIDO PROFESOR")</script> ';
        	echo "<script>location.href='indexdocente.php'</script>";
    	}
    }
}

/*


$sql=mysql_query("SELECT * FROM users WHERE user='$username'");
if($f=mysql_fetch_array($sql)){
    if($pass==$f['password']){
        header("Location: index2.php");
    }else{
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

        echo "<script>location.href='indexx.php'</script>";
    }
}else{

    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

    echo "<script>location.href='indexx.php'</script>";

}


*/



?>