<?php get_header(); ?>

<main id="main" class="section container is-fluid">
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
        <section class="section wp-section">
            <div class="container">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>

            <?php endwhile; endif; ?>
            </div>
        </section>

</main>
<?php get_footer(); ?>
