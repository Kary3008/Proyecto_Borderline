<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <script src="includes/push/push.min.js"></script>
    <title>Notificaciones | Push</title>
  <?php
    $notification= '<script>
        Push.create("Hola, bienvenido", {
              body: "Visita mi repositorio en GitHub",
              icon: "img/logo.png",
              timeout: 6000,
              onClick: function() {
                window.location="https://github.com/Kary3008";
                this.close();
              }
        });
      </script>';
        echo $notification;
        ?>
  </head>
  <body>
    <h3>Notificaciones PUSH</h3>

  </body>
</html>
