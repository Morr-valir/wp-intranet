<?php
/*
  Template Name: Annuaire
*/
get_header(); ?>
    <main id="main" class="section container is-fluid">
        <section class="container">
            <label>Recherche par Nom</label>
            <input class="input" type="text" v-model="liste" style="margin-bottom:25px;">
            <tableau style="width: 100%;padding:15px">
              <liste v-for="(list,i) in filteredList" :key="i" :nom="list.nom" :service="list.pole" :type="list.type" :num="list.tel"/>
            </tableau> 
        </section>
    </main>

<?php get_footer(); ?>
