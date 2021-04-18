<footer class="site-footer">
    <div class="contenedor clearfix">
        <div class="footer-informacion">
            <h3>Sobre <span>gdlwebcamp</span></h3>
            <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex
                blandit vehicula. Morbi porttitor tempus euismod.</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Últimos <span>tweets</span></h3>
            <a class="twitter-timeline" data-height="400" data-theme="light" data-link-color="#fe4918" href="https://twitter.com/JuanDevWP">Tweets by JuanDevWP</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="menu">
            <h3>Redes <span>sociales</span></h3>
            <nav class="redes-sociales">
              <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
              <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
              <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
              <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            </nav>
        </div>
    </div>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
  <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display: none;">
  <div id="mc_embed_signup">
    <form action="https://gmail.us1.list-manage.com/subscribe/post?u=b53ef3ef636083d567569d938&amp;id=68ce87722e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
      <label for="mce-EMAIL">Subscríbete al newsletter</label>
      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Correo electrónico" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b53ef3ef636083d567569d938_68ce87722e" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
  </div>
</div>
<!--End mc_embed_signup-->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="aishek-jquery-animateNumber-8b31991/jquery.animateNumber.min.js"></script>
  <script src="jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
  <script src="Lettering.js-master/jquery.lettering.js"></script>
  <script src="imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.min.js"></script>
  <script src="js/jquery.colorbox-min.js"></script>
  
  <?php 
    $archivo = basename ($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php","", $archivo);
    if ($pagina == 'invitados' || $pagina == 'index') {
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    }
    else if ($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>"">';
    }
    
  ?> 
 

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

</footer>