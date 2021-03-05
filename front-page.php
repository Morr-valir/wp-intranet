<?php get_header(); ?>
      <!--Contenu-->
      <main id="main" class="section container is-fluid">
        <!--Moteur de recherche-->
        <section id="moteur" class="block">
          <div class="container">
            <div class="search">
              <div class="logo-mairie"></div>
              <?php if (is_active_sidebar('nouvelle_zone')) : ?>
                <section id="sidebar-recherche">
                <?php dynamic_sidebar('nouvelle_zone');?>
              </section>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </section>
        <!--Les actus-->
        <section id="Actu" class="block">
          <div class="container">          
            <h1 class="title is-4">L'actu</h1>
            <hr>
            <container-post></container-post>
          </div>
        </section>
        <!--Les mots du maire-->
        <section-maire>
        <?php
              $args = array( 'post_type' => 'mot_du_maire	', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args );
              $the_query = new WP_Query($args);
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <mot-post 
                      titre="<?php the_title(); ?>" 
                      auteur="<?php the_author(); ?>" 
                      date="Publié le <?php the_time( get_option( 'date_format' ) ); ?>" 
                      avatar="<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>" 
                      type="<?php the_field( 'niveau_dimportance' ); ?>" 
                      pic="<?php the_field( 'niveau_dimportance' ); ?>"
                      lien="<?php the_permalink(); ?>"
                  />           
               <?php endwhile; wp_reset_postdata();?>
        </section-maire>
        <!--Les sondages-->
        <section id="sondage" class="block">
          <div class="container">
            <h3 class="title is-4">Les sondages</h3>
            <hr>
            <div class="columns sondage">
              <?php
              $args = array( 'post_type' => 'Sondage', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args );
              $the_query = new WP_Query($args);
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <box-sondage link="<?php the_field( 'lien_du_sondage' ); ?>">
              <?php the_title(); ?>
              </box-sondage>
               <?php endwhile; wp_reset_postdata();?>
            </div>
          </div>
        </section>
      </main>
<?php get_footer(); ?>
