<?php include_once 'includes/templates/header.php';?>
  <section class="seccion contenedor">
    <h2> La mejor conferencia de diseño web en español</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, nisl a varius egestas, nulla nisi sollicitudin erat, sit amet varius ante lectus at lorem. In dictum accumsan orci ac malesuada. Nullam nec felis mi. Phasellus id elementum massa. Morbi sodales vitae ipsum ut consequat. Mauris nec enim vitae metus aliquam gravida sit amet in dui. Etiam ut nisl fermentum sapien sollicitudin vulputate. Integer sit amet pulvinar nibh. Nullam laoreet placerat ornare.
    </p>
  </section> <!--.seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">

      </video>
    </div> <!--contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
            <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
          </nav>
          <div id ="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML5, CSS3 y Javascript</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 16:00</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Jordi Cases</p>
            </div>
          
            <div class="detalle-evento">
              <h3>Responsive Web Desing</h3>
              <p><i class="far fa-clock" aria-hidden="true"></i> 20:00</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Jordi Cases</p>
            </div>
          </div> <!--talleres-->  
            <div id ="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 10:00</p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
                <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchez</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnología del Futuro</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 20:00</p>
                <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 Dic</p>
                <p><i class="fa fa-user" aria-hidden="true"></i> Susana Sanchez</p>
              </div>
            </div> <!--conferencias-->  
              <div id ="seminarios" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>Diseño UX/Ui para móviles</h3>
                  <p><i class="far fa-clock" aria-hidden="true"></i> 10:00</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 Dic</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Jarolds Garcia</p>
                </div>
              
                <div class="detalle-evento">
                  <h3>Aprende a programar en una mañana</h3>
                  <p><i class="far fa-clock" aria-hidden="true"></i> 20:00</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 Dic</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Jordi Cases</p>
                </div>
              </div> <!--seminarios--> 
            <a href="#" class="button float-right">Ver Todos</a>
          
        </div> <!--.programa-evento-->
      </div><!--contenedor-->
    </div> <!--.contenido-programa-->
  </section> <!--programa-->

  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
    <li>
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="imagen invitado1">
        <p>Rafael Bautista</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="imagen invitado2">
        <p>Shari Herrera</p>
      </div>
    </li> <li>
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="imagen invitado3">
        <p>Gregorio Sanchez</p>
      </div>
    </li> <li>
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="imagen invitado1">
        <p>Susana Rivera</p>
      </div>
    </li> <li>
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="imagen invitado1">
        <p>Harlod Garcia</p>
      </div>
    </li> <li>
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="imagen invitado1">
        <p>Susan Sanchez</p>
      </div>
    </li>
      
    </ul>

  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero">0</p>Invitados</li>
        <li><p class="numero">0</p>Talleres</li>
        <li><p class="numero">0</p>Dias</li>
        <li><p class="numero">0</p>Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 días</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa">
  </div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula convallis erat. In ante augue, feugiat luctus justo eu, luctus tempus nunc. Suspendisse tempus varius nibh, nec faucibus metus blandit ut. Vestibulum sodales nisl velit. Ut a sagittis odio. Cras hendrerit gravida nisl, nec aliquam ex mattis vel. In porttitor purus eu diam tempus vehicula. Cras lacinia cursus sagittis. </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite> 
          </footer>
        </blockquote>
      </div><!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula convallis erat. In ante augue, feugiat luctus justo eu, luctus tempus nunc. Suspendisse tempus varius nibh, nec faucibus metus blandit ut. Vestibulum sodales nisl velit. Ut a sagittis odio. Cras hendrerit gravida nisl, nec aliquam ex mattis vel. In porttitor purus eu diam tempus vehicula. Cras lacinia cursus sagittis.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite> 
          </footer>
        </blockquote>
      </div><!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula convallis erat. In ante augue, feugiat luctus justo eu, luctus tempus nunc. Suspendisse tempus varius nibh, nec faucibus metus blandit ut. Vestibulum sodales nisl velit. Ut a sagittis odio. Cras hendrerit gravida nisl, nec aliquam ex mattis vel. In porttitor purus eu diam tempus vehicula. Cras lacinia cursus sagittis. </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite> 
          </footer>
        </blockquote>
      </div> <!--.testimonial-->
    </div>
  </section>
  
  <div class="newsletter parallax">
    <div class="contenido">
      <p>Regístrate al newsletter</p>
      <h3>gldwebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div> <!--.contenido-->
  </div> <!--.newsletter-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p>días</li>
        <li><p id="horas" class="numero"></p>horas</li>
        <li><p id="minutos"class="numero"></p>minutos </li>
        <li><p id="segundos"class="numero"></p>segundos</li>
      </ul>
    </div>
  </section>
</html>
<?php include_once 'includes/templates/footer.php';?>
