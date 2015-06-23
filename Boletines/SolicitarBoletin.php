<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<?php 
  require("conexion.php");
 ?>
<head>
     <meta charset="UTF-8">
     <title>Fe y Alegria N°21</title>
     <link rel="stylesheet" href="diseño/estilos.css">
     <link rel="stylesheet" href="diseño/iconos.css">
</head>
<body>
  <h1>PUBLICAR BOLETINES</h1>
  <h2>Complete todos los campos requeridos</h2>
  <p>Aqui podra poner todos los boletines, asambleas y demas actividades que desee</p>

<div class="row">
  <select name="boletinTipo" id="boletinTipo" placeholder="Tipo de boletin">
    <option value="">-------Tipo de boletin-------</option>
    <option value="B1">Boletines</option>
    <option value="B2">Asamble general</option>
    <option value="B3">Asamblea de Salon</option>
    <option value="B4">Faena general</option>
    <option value="B5">Faena de salon</option>
    <option value="B6">Fechas Importantes</option>
    <option value="B7">Citacion</option>
  </select>
  
  <select name="boletinGrado" id="boletinGrado">
    <option value="" selected="selected">-----Selecciona grado------</option>
    <?php 
    $sql="SELECT idgrado FROM tcarga_academica";
    $rec=mysql_query($sql);
    while ($row=mysql_fetch_array($rec)) {
      echo"<option>";
      echo $row['idgrado'];
      echo "</option>";
    }
     ?>
  </select>
</div>

<div class="row">
  <select name="boletinSeccion" id="boletinSeccion">
    <option value="" selected="selected">---Selecciona Seccion---</option>
    <?php 
    $sql="SELECT idseccion FROM tcarga_academica";
    $rec=mysql_query($sql);
    while ($row=mysql_fetch_array($rec)) {
      echo"<option>";
      echo $row['idseccion'];
      echo "</option>";
    }
     ?>
  </select>

  <select name="boletinMAestro" id="boletinMaestro">
    <option value="" selected="selected">----Selecciona Maestro----</option>
    <?php 
    $b_grado=$_POST['boletinGrado'];
    $b_seccion=$_POST['boletinSeccion'];
    $sql="SELECT D.Nombres,D.apPaterno,D.apMaterno FROM tcarga_academica C INNER JOIN tdocente D ON C.iddocente=D.iddocente AND C.idgrado="$b_grado" AND C.idseccion="$b_seccion" GROUP BY D.Nombres,D.apPaterno,D.apMaterno";
    $rec=mysql_query($sql);
    while ($row=mysql_fetch_array($rec)) {
      echo"<option>";
      echo $row['apPaterno'].$row['apMaterno'].$row['Nombres'];
      echo "</option>";
    }
     ?>
  </select>
  </div>

  <div class="row">
    <div class="six columns">
      <input type="datetime-local" name="boletinFecha" id="boletinFecha" placeholder="Fecha">
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <textarea name="boletinDescripcion" id="boletinDescripcion" cols="50" rows="10" placeholder="Descripcion"></textarea>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <button class="submit" name="boletinPublicar" id="boletinPublicar">PUBLICAR</button>
    </div>
  </div>

  

</body>
</html>