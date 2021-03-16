<?php
/*
  Template Name: Annuaire
*/
get_header(); ?>
    <main id="main" class="section container is-fluid">
        <section class="container">
            <label>Recherche par Nom</label>
            <input class="input" type="text" v-model="liste" style="margin-bottom:25px;">
            <div class="columns is-multiline" style="padding: 20px ;justify-content: center;">
            <div class="column is-3 box" style="margin: 10px;" v-for="(list,i) in filteredList" :key="i" :key_contact="list.id" :nom="list.nom" :service="list.pole" :type="list.type" :num="list.tel">
              <div class="media-content">
                <div class="content" style="position: relative;">
                  <p>
                    <strong>{{list.nom}}</strong> <small class="tag type"> Numéro : {{list.type}}</small>
                    <br>
                    <br>
                    <strong>{{list.tel}}</strong>
                  </p>
                </div>
            </div>

          </div>

        </div>
        </section>
    </main>

<?php get_footer(); ?>
