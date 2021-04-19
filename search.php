<?php get_header(); ?>
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
              <?php endif; ?>
            </div>
          </div>
        </section>
        <!--Les actus-->
        <section id="Actu" class="block">
          <div class="container">          
            <h1 class="title is-4">Archive des articles</h1>
            <hr>
            <ul class="filtre">
              <li><a href="">Tous</a></li>
              <li><a href="">Informations</a></li>
              <li><a href="">Recructement</a></li>
              <li><a href="">urgent</a></li>
            </ul>
            <transition name="slide-fade">
              <div class="columns is-multiline">
              <?php
              $args = array(
                  'post_type'       => 'post',
                  'posts_per_page'  => 8,
                  'orderby'         => 'date',
                );
                $recentPosts = new WP_Query($args);
              ?>
              <?php while($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div class="column is-6">
                  <article class="box">
                  <!--Header article-->
                  <header>
                    <!--IMG & INFO-->
                    <div class="column">
                      <figure class="image is-64x64">
                      <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                      </figure>
                      <p>
                        <strong><?php the_author(); ?></strong>
                        <br>
                        <small>
                        Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                        </small>
                      </p>
                    </div>
                    <!--Tag Alert-->
                    <div class="colmun">
                      <tag styles="<?php the_field( 'custom_important' ); ?>">
                      <?php the_field( 'custom_important' ); ?>
                      </tag>
                    </div>
      
                  </header>
                  <main>
                      <span class="title is-4"><?php the_title(); ?></span>
                      <a href="<?php the_permalink(); ?>">Lire</a>
                  </main>
                </article>
              </div>
              <?php endwhile; ?>
              </div>
            </transition>
            <?php the_posts_pagination(); ?>
          </div>
        </section>
</main>
<?php get_footer(); ?>