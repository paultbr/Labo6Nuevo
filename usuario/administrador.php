<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Fe y Alegria N°21</title>
     <link rel="stylesheet" href="diseño/estilos.css">
</head>
<body>
      <h2>Registrarce</h2>
        <form action="isertarNuevo.php" method="post">
            
            <div>
                <label><h3>DNI</h3></label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" />
            </div>

            <div class="form-group">
                <label><h3>Nombres</h3></label>
                <input type="text" name="realname" class="form-control" placeholder="Nombres" />
            </div>

            <div class="form-group">
                <label><h3>Apellido Paterno</h3></label>
                <input type="text" name="apellidop" class="form-control" placeholder="Apellido Paterno" />
            </div>

            <div>
                <label><h3>Apellido Materno</h3></label>
                <input type="text" name="apellidom" class="form-control" placeholder="Apellido Materno" />
            </div>

            <div>
                <label><h3>Email</h3></label>
                <input type="text" name="mail2" class="form-control" placeholder="Email" />
            </div>

            <div>
                <label><h3>Telefono</h3></label>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono" />
            </div>

             <div>
                <label><h3>Direccion</h3></label>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion" />
            </div>

            <div>
                <label><h3>Contraseña</h3></label>
                <input type="password" name="pass" class="form-control" placeholder="Contraseña" />
            </div>

            <div>
                <label><h3>Repita la Contraseña</h3></label>
                <input type="password" name="rpass" class="form-control" placeholder="Contraseña" />
            </div>

            <div>
                <label><h3>Categoria de Cuenta</h3></label>
                <input type="tex" name="categoria" class="form-control" value="Administrador" />
            </div>

            <!-- boton de registro -->
            <input class="btn btn-danger" type="submit" name="submit" value="Registrar" />

        </form>

</body>
</html>
