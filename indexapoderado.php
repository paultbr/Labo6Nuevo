<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Fe y Alegria N°21</title>
     <link rel="stylesheet" href="diseño/estilos.css">
     <link rel="stylesheet" href="diseño/iconos.css">
</head>
<body>
     <!--menu-->
     <header>
     	<nav>
     		<ul>
     			<li><a href="#"><span class=""><i class="icon icon-pencil"></i></span>Reportes</a>
                    <ul>
                    		<li><a href="elegirAsistenciaAlumno.php">Asistencia Alumno</a></li>
                              <li><a href="notaAlumno.php">Nota Alumno</a></li>
                              <li><a href="boletine.php">Boletines y Avisos</a></li>
                              <li><a href="index.html">Salir</a></li>
                    </ul></li>
     		</ul>
     	</nav>
     </header>
     
     <div id="tooplate_fecha">
          <script>
               var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
               var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
               var f=new Date();
               document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
          </script>
     </div>

     <div id="tooplate_hora">
           <script type="text/javascript">
               function startTime(){
               today=new Date();
               h=today.getHours();
               m=today.getMinutes();
               s=today.getSeconds();
               m=checkTime(m);
               s=checkTime(s);
               document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
               t=setTimeout('startTime()',500);}
               function checkTime(i)
               {if (i<10) {i="0" + i;}return i;}
               window.onload=function(){startTime();}
           </script>
           <div id="reloj" style="font-size:20px;">Tiempo: </div>
     </div>

     <div><h6>BIENVENIDO!</h6></div>

     <div id="mid_title">
            Usuario : 
            <?php
            session_start();
            $usuario = $_SESSION['usuario'];
            echo  " $usuario" ?>
     </div>
</body>