<?php
/*
  Template Name: Page prévention
*/
get_header(); ?>
<main id="main" class="section container is-fluid">
    <!--Moteur de recherche-->
    <section id="moteur" class="block">
          <div class="container">
            <div class="search">
            <img src="<?php echo get_template_directory_uri(); ?>./img/LOGO_POSSESSION_Slogan.jpg" alt="Logo de la mairie">
              <?php if (is_active_sidebar('nouvelle_zone')) : ?>
                <section id="sidebar-recherche">
                <?php dynamic_sidebar('nouvelle_zone');?>
              </section>
              <?php endif; ?>
            </div>
          </div>
    </section>
    <!--Section service-->
    <section id="service-prevention" class="block">
        <div class="container">
            <div class="columns">
                <article class="column">
                    <h2 class="subtile is-4">Déclaration d'incident</h2>
                    <hr>
                    <blockquote>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, atque? Id atque, at cupiditate eveniet tempore quod laboriosam minus odio ut enim. Dolorum ab quo, unde veniam adipisci consequuntur tempore.
                    </blockquote>
                    <a href="" class="button is-recherche">Faire ma déclaration</a>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>./img/images-article-2.jpg" alt="Image prévention">
                    </figure>
                </article>
                <article class="column">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>./img/images-article-2.jpg" alt="Image prévention">
                    </figure>
                    <h3 class="subtile is-4">Demande d'intervention</h3>
                    <hr>
                    <blockquote>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, atque? Id atque, at cupiditate eveniet tempore quod laboriosam minus odio ut enim. Dolorum ab quo, unde veniam adipisci consequuntur tempore.
                    </blockquote>
                    <a href="" class="button is-recherche">Faire ma demande</a>
                </article>
            </div>
        </div> 
    </section>
    <!--Section des partenaire-->
    <section id="partenaire-prevention" class="block">
        <div class="container">
            <h4 class="subtile is-4">Nos partenaire</h4>
            <hr>
            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tenetur, quos minima non enim est in impedit!
            </blockquote>
            <div class="columns is-mulitiline partenaire">
                <details class="column">
                    <summary>Partenaire 1</summary>
                    <div>
                        <li>Nom : jean luc</li>
                        <li>Tel : 02 62 222 222</li>
                        <li>adresse : 53 rue du test intranet</li>
                    </div>
                </details>
                <details class="column">
                    <summary>Partenaire 2</summary>
                    <div>
                        <li>Nom : jean luc</li>
                        <li>Tel : 02 62 222 222</li>
                    </div>
                </details>
                <details class="column">
                    <summary>Partenaire 3</summary>
                    <div>
                        <li>Nom : jean luc</li>
                        <li>Tel : 02 62 222 222</li>
                    </div>
                </details>
                <details class="column">
                    <summary>Partenaire 4</summary>
                    <div>
                        <li>Nom : jean luc</li>
                        <li>Tel : 02 62 222 222</li>
                    </div>
                </details>
            </div>
        </div>
    </section>

</main>    
<?php get_footer(); ?>
