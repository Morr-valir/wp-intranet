<?php
/*
  Template Name: Annuaire
*/
get_header(); ?>
    <main id="main" class="section container is-fluid">
        <section class="container">
            <label>Recherche par Nom</label>
            <input class="input" type="text" v-model="liste" style="margin-bottom:25px;">
            <div class="columns is-multiline" style="padding: 20px ;justify-content: space-between;">
                <div class=" box column is-3" style="margin: 10px;" v-for="(list,i) in filteredList" :key="i" :key_contact="list.id" :nom="list.nom" :service="list.pole" :type="list.type" :num="list.tel">
                    <!--NEW CARTE-->
                    <header class="carte-header">
                        <p>{{list.nom}}<br>{{list.tel}}</p>
                        <small class="tag">Numéro : {{list.type}}</small>
                    </header>
                </div>
          </div>
        </section>
    </main>

<?php get_footer(); ?>
