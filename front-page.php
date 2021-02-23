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
            <h1 @click="affiche = ! affiche" class="title is-4">L'actu</h1>
            <transition-group name="slide-fade">
            <hr key="1" v-show="affiche">
            <ul class="filtre" key="2" v-show="affiche">
              <li><a href="">Tous</a></li>
              <li><a href="">Informations</a></li>
              <li><a href="">Recrutement</a></li>
              <li><a href="">urgent</a></li>
            </ul>
              <div class="columns is-multiline" v-show="affiche" key="3">
              <?php
                $args = array(
                  'post_type'       => 'post',
                  'posts_per_page'  => 4,
                  'orderby'         => 'date',
                );
                $recentPosts = new WP_Query($args);
              ?>
              <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                <div class="column is-6">
                  <article-post 
                        titre="<?php the_title(); ?>" 
                        auteur="<?php the_author(); ?>" 
                        date="Publié le <?php the_time( get_option( 'date_format' ) ); ?>" 
                        avatar="<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>" 
                        type="<?php the_field( 'niveau_dimportance' ); ?>" 
                        pic="<?php the_field( 'niveau_dimportance' ); ?>"
                        lien="<?php the_permalink(); ?>"
                        data-type="<?php the_field( 'niveau_dimportance' ); ?>"
                    />
              </div>
              <?php endwhile; wp_reset_postdata(); ?>
              </comp>
              </div>
            </transition-group>
          </div>
        </section>
        <!--Les mots du maire-->
        <section-maire>
        <?php
              $args = array( 'post_type' => 'mot_du_maire	', 'posts_per_page' => 3 );
              $the_query = new WP_Query( $args );
              $the_query = new WP_Query($args);
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <article-post 
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
        <!--ZONE DE TEST-->
        <!-- <section class="block">
          <div class="container">
                <span class="title is-4">Zone de test</span>
                <hr>
                <div class="columns is-multiline">
                <div class="column is-6" v-for="article in Posts">
                <article-post
                :titre='article.title'
                :auteur='article.author.node.name'
                :lien='article.link'
                :date='article.date'
                :avatar='article.author.node.avatar.url'
                :type='article.tag_info.niveauDimportance' 
                :pic='article.tag_info.niveauDimportance'

                 />
                </div>
                </div>
          </div>
        </section> -->
      </main>
<?php get_footer(); ?>