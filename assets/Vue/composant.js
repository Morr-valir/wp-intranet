//-----TAG---------------------
Vue.component('tag', {
    props:{ styles:String,},
    template: `
                <span :class="styles">
                <i class="fas fa-exclamation-circle"></i>
                <p class=tag-title><slot/></p>
                </span>`
})
  //------------------------------
  //-------Sondage----------
  Vue.component('BoxSondage', {
    props:{ link: String,
            type: String,
          },
    template: `
        <a v-bind:href="link">
        <div class="column" :class="type">
        <div class="box-sondage box">
        <span>
        <i class="fas fa-info-circle"></i>
        <slot/>
        </span>
        </div>
        </div>
        </a>
    `
})
  //------------------------------
  //-------Burger Nav----------
  Vue.component('menu-screen', {
    template: `
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
    `
})
  //------------------------------
  //-------Les mots du maire----------
  Vue.component('SectionMaire', {
    template: `
    <section id="Mots-maire" class="block">
    <div class="container">
      <h2 class="title is-4">Les mots du Maire</h2>
      <hr>
      <div class="columns">
        <div class="column">            
          <slot/>
        </div>
      </div>
    </div>
    </section>
    `
})
//-------------------------------
//----COMPOSANT ARTICLE----------
Vue.component('ArticlePost',{
  props:{
    titre:      String,
    auteur:     String,
    date:       String,
    avatar:     String,
    type:       String,
    pic:        String,
    lien:       String,
    },
  template:`
  <a :href="lien">
  <article class="box">
  <!--Header article-->
  <header>
    <!--IMG & INFO-->
    <div class="column">
      <figure  class="image is-64x64">
      <img :src="avatar"/>
      </figure>
      <p class="info-article">
        <strong>{{auteur}}</strong>
        <br>
        <small>{{date}}</small>
      </p>
    </div>
    <!--Tag Alert-->
    <div class="colmun">
      <tag :class="pic">{{type}}</tag>
    </div>
  </header>
  <main>
    <h2 class="subtile is-4">{{titre}}</h2>
  </main>
</article>
</a>
  `
})
//-------------------------------
//----COMPOSANT MOT----------
Vue.component('MotPost',{
  props:{
    titre:      String,
    auteur:     String,
    date:       String,
    avatar:     String,
    type:       String,
    pic:        String,
    lien:       String,
    },
  template:`
  <a :href="lien">
  <article class="box">
  <!--Header article-->
  <header>
    <!--IMG & INFO-->
    <div class="column">
      <figure v-html="avatar"  class="image is-64x64">
      </figure>
      <p class="info-article">
        <strong>{{auteur}}</strong>
        <br>
        <small>{{date}}</small>
      </p>
    </div>
    <!--Tag Alert-->
    <div class="colmun">
      <tag :class="pic">{{type}}</tag>
    </div>
  </header>
  <main>
    <h2 class="subtile is-4">{{titre}}</h2>
  </main>
</article>
</a>
  `
})
//------------------------------
//---Dropdown-------------------
Vue.component('Dropdown',{
    template:`
          <div>
            <a class="login-link" @click='toggleShow'><i class="fas fa-user-circle"></i></a>
              <div v-if='showMenu'  @click="showMenu = false" class="close-dropdown"></div>
              <div v-if='showMenu' id="dropdown" class="dropdown-content">
                <slot/>
              </div>
          </div>`,
          data: () => {
            return {
              showMenu: false
            }
          },
          methods: {
            toggleShow: function() {
              this.showMenu = !this.showMenu;
            },}

})

//--INSTANCE DE VUEJS
const AppVue = new Vue({
  el: '#app',
  data() {
    return {
      appli: false,
      affiche: true,
      Posts:[],
    }
  },
  mounted() {
    axios({
      url: 'http://localhost:8080/wordpress/graphql',
      method: 'post',
      data: {
        query: `
        query MyQuery {
          posts(first: 4) {
              nodes {
                author {
                  node {
                    name
                    avatar {
                      url
                    }
                  }
                }
                date
                title
                tag_info {
                  niveauDimportance
                }
                link
              }
            }
          }
        
          `
      }
    }).then(response => (this.Posts = response.data.data.posts.nodes))

  },
})
