<?php get_header(); ?>
    <main id="main-post" class="section container is-fluid">
      <div class="container">
      <section id="Breadcrumb">
          <?php dynamic_sidebar('Breadcrumb');?>
      </section>
      <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article>
          <section class="columns">
            <div class="column">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
              <p>Publié le <?php the_date(); ?> par <?php the_author(); ?></p>
              <h1 class="title is-4"><?php the_title(); ?></h1>
            </div>
            <div class="column"style="display:flex;justify-content: flex-end;">
              <tag styles="<?php the_field( 'niveau_dimportance' ); ?>">
                <?php the_field( 'niveau_dimportance' ); ?>
              </tag>
            </div>
          </section>
          <section class="content">
            <?php the_content(); ?>
          </section>
        </article>
        <?php endwhile; endif; ?>
        <section id="pagination_post" class="block">
        <div><?php previous_post_link('Article Précédent<br>%link') ?></div>
        <div><?php next_post_link('Article Suivant<br>%link') ?></div>
        </section>
      </div>
    </main>
<?php get_footer(); ?>