<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <?php

      	if(isset($_POST['usuario'])) {
          echo $_POST['usuario'];
      	}
        if(isset($_POST['contrasena'])) {
          echo $_POST['contrasena'];
      	}
    ?>
    <div class="container mt-5">
      <h1>Inicia sesión</h1>
      <form action="#" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name='usuario' placeholder="usuario">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleFormControlTextarea1" name="contrasena" placeholder="contraseña"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inicia</button>
      </div>
    </form>
  </body>
</html>
