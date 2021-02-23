<?php
/*
  Template Name: Page formulaire
*/
get_header(); ?>
      <!--Contenu-->
      <main id="main" class="section container is-fluid">
        <!--Moteur de recherche-->
        <section id="moteur" class="block">
          <div class="container">
            <div class="search">
              <logo lien="<?php echo get_template_directory_uri(); ?>./img/LOGO_POSSESSION_Slogan.jpg"></logo>
              <?php dynamic_sidebar( 'nouvelle_zone' ); ?>
            </div>
          </div>
        </section>
        <!--Liste des formulaires-->
        <section id="formulaire" class="block">
            <div class="container">
                <h1 class="title is-4">Liste des déclarations</h1>
                <hr>
                <box>
                    <span>Demande de télétravail</span>
                    <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis
                    palatii ianuis, contempto Caesare, quem videri decuerat, ad praetorium 
                    cum pompa sollemni perrexit morbosque
                    diu causatus nec regiam introiit nec processit in publicum,</p>
                    <br>
                    <a href="" class="button is-recherche">Faire ma déclaration</a>
                </box>
                <box>
                    <span>Déclaration un manque d'hygiène</span>
                    <p>Qui cum venisset ob haec festinatis itineribus Antiochiam, praestrictis
                    palatii ianuis, contempto Caesare, quem videri decuerat, ad praetorium 
                    cum pompa sollemni perrexit morbosque
                    diu causatus nec regiam introiit nec processit in publicum,</p>
                    <br>
                    <a href="" class="button is-recherche">Faire ma déclaration</a>
                </box>
            </div>
        </section>
</main>
<?php get_footer(); ?>
