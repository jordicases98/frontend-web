<?php include_once 'includes/templates/header.php';?>
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


  <section class="seccion contenedor">
      <h2>Calendario de eventos</h2>
      <?php
        try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado";
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
            $sql .= " ORDER BY evento_id ";
            $resultado = $conn->query($sql);
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }

        ?>
        <div class="calendario">
            <?php 
                $calendario = array(); 
                while ($eventos = $resultado->fetch_assoc()) { 
                    //obtiene la feccha evento
                    $fecha = $eventos['fecha_evento'];
                    $categoria = $eventos['cat_evento'];

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => 'fa' . " " . $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
                    );
                    $calendario[$fecha][] = $evento;

                    ?>

                    <?php foreach($calendario as $dia => $lista_eventos) {?>
                        <h3>
                            <i class="far fa-calendar-times" aria-hidden="true"></i>
                            <?php
                            setlocale(LC_TIME, 'spanish');  ?>
                            <?php echo strftime("%A, %d de %B del %Y", strtotime($dia)); ?>
                        </h3>
                        <?php foreach($lista_eventos as $evento) { ?>
                            <div class="dia">
                                <p class="titulo"> <i class="far fa-check-circle" aria-hidden="true"></i> <?php echo $evento['titulo']; ?> </p>
                                <p class="hora"> 
                                    <i class="far fa-clock" aria-hidden="true"></i>
                                    <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                                </p>
                                <p> 
                                    <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i> 
                                    <?php echo $evento['categoria'] ; ?>
                                </p>    
                                <p> 
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?php echo $evento['invitado'] ; ?>
                                </p>

                            </div>
                        
                        <?php  } ?>

                    <?php } //fin foreach Eventos ?>
                    

                <?php } //fin foreach dias?> 
            
  
        </div>

        <?php
            $conn->close();
        ?> 
    </section>    


    

</body>
</html>
<?php include_once 'includes/templates/footer.php';?>
