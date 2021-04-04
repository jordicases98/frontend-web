<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->


  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="lightbox2-dev/src/css/lightbox.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="theme-color" content="#fafafa">
</head>

<body class="conferencia">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = " SELECT * FROM `invitados`";
        $resultado = $conn->query($sql);
    }
    catch (\Exception $e) {
        echo $e->getMessage();
    }

    ?>
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix"> 
            <?php while ($invitados = $resultado->fetch_assoc()) { ?>
                <li>
                    <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']?>">
                            <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado">
                            <p><?php echo $invitados['nombre_invitado'] . ' '. $invitados['apellido_invitado'] ?> </p>
                        </a>
                    </div>
                </li>

                <div style="display:none;">
                    <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'];?>">
                        <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></h2>
                        <img src="img/<?php echo $invitados['url_imagen']?>" alt="imagen invitado">
                        <p> <?php echo $invitados['text'] ?></p>
                    </div>
                </div>
                    
            <?php } //fin foreach invitados?> 
        </ul>
    </section>


    <?php
        $conn->close();
    ?> 
 


    

</body>
</html>