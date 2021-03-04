<footer>
  <div class="container">
    <section class="columns">
        <div class="column">
          <a href="#">Mentions légales</a>
        </div>
        <div class="column">
          <p>Copyright © 2021 - Tous droits réservés <!-- <a href="#">Mairie de la Possession</a></p> -->
        </div>
    </section>
  </div>
</footer>
<!-- FIN DIV APP VUEJS-->
</div>
<?php wp_footer(); ?>
      <!--Les scripts-->
      <script src="<?php echo get_template_directory_uri(); ?>/assets/burger.js" ></script>
      <!--Import Vuejs-->
      <script src="https://unpkg.com/axios/dist/axios.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0" ></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/Vue/composant.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/darkmode.js"></script>
    </body>
</html>