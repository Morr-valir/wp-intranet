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
      <figure v-html="avatar"  class="image is-64x64">
      </figure>
      <p class="info-article">
        <strong>{{auteur}}</strong>
        <br>
        <time>{{date}}</time>
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
Vue.component('liste', {
  props: ["nom","service","type","num"],
  template: 
  `
  <tr>
      <td><a>{{nom}}</a></td>
      <td><b>{{service}}</b></td>
      <td>{{type}}</td>
      <td><b>{{num}}</b></td>
  </tr>
  `,
})
Vue.component('tableau', {
  template: 
  `
  <table class="table">
  <thead>
      <tr>
        <th>Nom - Prénom</th>
        <th>Nom du service</th>
        <th>Type</th>
        <th>Numéro</th>
      </tr>
  </thead>
  <tbody>
      <slot/>
  </tbody>
</table>
  `,
})

//--INSTANCE DE VUEJS
const AppVue = new Vue({
  el: '#app',
  data() {
      return {
          liste:'',
          contacts:[
              {
                  "id":"1",
                  "pole":"Mairie centrale",
                  "type":"Externe",
                  "nom":"Accueil",
                  "tel":"0262 22 20 02"
              },
              {
                  "id":"2",
                  "pole":"Mairie centrale",
                  "type":"Interne",
                  "nom":"Accueil",
                  "tel":"100"
              },
              {
                  "id":"3",
                  "pole":"Mairie centrale",
                  "type":"Interne",
                  "nom":"FRANCOMME Mélanie",
                  "tel":"106"
              },
              {
                  "id":"4",
                  "pole":"Mairie centrale",
                  "type":"Interne",
                  "nom":"MIREL Gilberte",
                  "tel":"162"
              },
              {
                  "id":"5",
                  "pole":"Mairie centrale",
                  "type":"Interne",
                  "nom":"LATRA Isabelle",
                  "tel":"146"
              },
              {
                  "id":"6",
                  "pole":"Mairie centrale",
                  "type":"Interne",
                  "nom":"NAULLEAU Brigitte",
                  "tel":"101"
              },
              {
                  "id":"7",
                  "pole":"Service courriers",
                  "type":"Interne",
                  "nom":"IDRI Laurance",
                  "tel":"179"
              },
              {
                  "id":"8",
                  "pole":"Service courriers",
                  "type":"Interne",
                  "nom":"REBECA Maryse",
                  "tel":"147"
              },
              {
                  "id":"9",
                  "pole":"Pôle ressources",
                  "type":"Interne",
                  "nom":"LETOULLEC Gérard",
                  "tel":"187"
              },
              {
                  "id":"10",
                  "pole":"Pôle moyens",
                  "type":"Interne",
                  "nom":"RUPERT Serge",
                  "tel":"121"
              },
              {
                  "id":"11",
                  "pole":"Pôle ressources humaines",
                  "type":"Externe",
                  "nom":"Accueil RH",
                  "tel":"0262 22 43 92"
              },
              {
                  "id":"12",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"PAYET Aurélie",
                  "tel":"153"
              },
              {
                  "id":"13",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"ADAM SCOE Laela",
                  "tel":"134"
              },
              {
                  "id":"14",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"LUI HIN TSAN Florent",
                  "tel":"145"
              },
              {
                  "id":"15",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"ADRIEN Laëtitia",
                  "tel":"144"
              },
              {
                  "id":"16",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"MANGATA Sabrina",
                  "tel":"184"
              },
              {
                  "id":"17",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"BOYER Valérie",
                  "tel":"148"
              },
              {
                  "id":"18",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"TY Youm",
                  "tel":"104"
              },
              {
                  "id":"19",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"HERMET Marion",
                  "tel":"176"
              },
              {
                  "id":"20",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"MOUTY SINAN Eriana",
                  "tel":"160"
              },
              {
                  "id":"21",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"LAPINSONNIERE Sandra",
                  "tel":"166"
              },
              {
                  "id":"22",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"PAYET Anne-Lise",
                  "tel":"161"
              },
              {
                  "id":"23",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"LE BIHAN Odile",
                  "tel":"149"
              },
              {
                  "id":"24",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"PAYET Léna",
                  "tel":"185"
              },
              {
                  "id":"25",
                  "pole":"Pôle ressources humaines",
                  "type":"Interne",
                  "nom":"LEBON Stéphanie",
                  "tel":"156"
              },
              {
                  "id":"26",
                  "pole":"Pôle finance",
                  "type":"Externe",
                  "nom":"Accueil ficance",
                  "tel":"0262 22 03 94"
              },
              {
                  "id":"27",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"DABREZA Philibert",
                  "tel":"150"
              },
              {
                  "id":"28",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"BALMANN Gilberte",
                  "tel":"152"
              },
              {
                  "id":"29",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"FONTAINE Thomas",
                  "tel":"131"
              },
              {
                  "id":"30",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"BANGUI Latifah",
                  "tel":"1407"
              },
              {
                  "id":"31",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"KONDOKI Natacha",
                  "tel":"143"
              },
              {
                  "id":"32",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"BARET Nathalie",
                  "tel":"141"
              },
              {
                  "id":"33",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"LUCIEN Elodie",
                  "tel":"177"
              },
              {
                  "id":"34",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"BOYER Marc-Alain",
                  "tel":"163"
              },
              {
                  "id":"35",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"ROBERT Nicole",
                  "tel":"118"
              },
              {
                  "id":"36",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"CLAIRENTEAU Brice",
                  "tel":"195"
              },
              {
                  "id":"37",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"THEMYR Sylvie",
                  "tel":"140"
              },
              {
                  "id":"38",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"DE-LOUISE Nicolas",
                  "tel":"139"
              },
              {
                  "id":"39",
                  "pole":"Pôle finance",
                  "type":"Interne",
                  "nom":"ZITTE Fabrice",
                  "tel":"137"
              },
              {
                  "id":"40",
                  "pole":"Administration générale",
                  "type":"Interne",
                  "nom":"RIVIERE Olivier",
                  "tel":"173"
              },
              {
                  "id":"41",
                  "pole":"Administration générale",
                  "type":"Interne",
                  "nom":"COURTEAUD John Mike",
                  "tel":"172"
              },
              {
                  "id":"42",
                  "pole":"Administration générale",
                  "type":"Interne",
                  "nom":"NATIVEL Angélique",
                  "tel":"102"
              },
              {
                  "id":"43",
                  "pole":"Administration générale",
                  "type":"Interne",
                  "nom":"HOARAU Michelle",
                  "tel":"402"
              },
              {
                  "id":"44",
                  "pole":"Cabinet du Maire",
                  "type":"Externe",
                  "nom":"Accueil cabinet du Maire",
                  "tel":"0262 22 24 21"
              },
              {
                  "id":"45",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"LANDRY Valérie",
                  "tel":"129"
              },
              {
                  "id":"46",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"AMADI Pascaline",
                  "tel":"113"
              },
              {
                  "id":"47",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"RIVIERE Thierry",
                  "tel":"168"
              },
              {
                  "id":"48",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"BUFFARD Nathalie",
                  "tel":"107"
              },
              {
                  "id":"49",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"SIDAT Coralie",
                  "tel":"159"
              },
              {
                  "id":"50",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"D'ANNA Tiffanie",
                  "tel":"183"
              },
              {
                  "id":"51",
                  "pole":"Cabinet du Maire",
                  "type":"Interne",
                  "nom":"TIMON Caroline",
                  "tel":"105"
              },
              {
                  "id":"52",
                  "pole":"Service informatique",
                  "type":"Externe",
                  "nom":"Accueil",
                  "tel":"0262 22 24 22"
              },
              {
                  "id":"53",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"FILAIN Yannick",
                  "tel":"114"
              },
              {
                  "id":"54",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"DARENCOURT Angélito",
                  "tel":"114"
              },
              {
                  "id":"55",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"MISTRAL Morgan",
                  "tel":"114"
              },
              {
                  "id":"56",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"DERAND GRONDIN John",
                  "tel":"114"
              },
              {
                  "id":"57",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"PREMONT Dorine",
                  "tel":"114"
              },
              {
                  "id":"58",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"JOSSET Gaëlle",
                  "tel":"114"
              },
              {
                  "id":"59",
                  "pole":"Service informatique",
                  "type":"Interne",
                  "nom":"ZOUAO Cédric",
                  "tel":"114"
              },
              {
                  "id":"60",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"ADAM Reyaz",
                  "tel":"103"
              },
              {
                  "id":"61",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"CAZETTE Emilie",
                  "tel":"132"
              },
              {
                  "id":"62",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"JUVENAL DIJOUX Gessie",
                  "tel":"189"
              },
              {
                  "id":"63",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"FRUTEAU Laurent",
                  "tel":"197"
              },
              {
                  "id":"64",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"FRUTEAU Laurent",
                  "tel":"197"
              },
              {
                  "id":"65",
                  "pole":"Marchés publics",
                  "type":"Interne",
                  "nom":"MAILLOT Rosine",
                  "tel":"175"
              },
              {
                  "id":"66",
                  "pole":"Service juridiques / Assemblés",
                  "type":"Interne",
                  "nom":"FERRARI Céline",
                  "tel":"169"
              },
              {
                  "id":"67",
                  "pole":"Service juridiques / Assemblés",
                  "type":"Interne",
                  "nom":"THOMAS Anne",
                  "tel":"198"
              },
              {
                  "id":"68",
                  "pole":"Service juridiques / Assemblés",
                  "type":"Interne",
                  "nom":"ROBERT Nathalie",
                  "tel":"898"
              },
              {
                  "id":"69",
                  "pole":"Eléctions",
                  "type":"Interne",
                  "nom":"COURTEAUD Nadège",
                  "tel":"182"
              },
              {
                  "id":"70",
                  "pole":"Eléctions",
                  "type":"Interne",
                  "nom":"PAYET Sylvie",
                  "tel":"126"
              },
              {
                  "id":"71",
                  "pole":"Archives",
                  "type":"Interne",
                  "nom":"BENARD Sophie",
                  "tel":"126"
              },
              {
                  "id":"72",
                  "pole":"Archives",
                  "type":"Interne",
                  "nom":"LIN Marilou",
                  "tel":"135"
              },
              {
                  "id":"73",
                  "pole":"Service communication",
                  "type":"Externe",
                  "nom":"Accueil",
                  "tel":"0262 54 55 00"
              },
              {
                  "id":"74",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"RIVIERE Tatianna",
                  "tel":"504"
              },
              {
                  "id":"75",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"ALEF Thomas",
                  "tel":"508"
              },
              {
                  "id":"76",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"MORAU SYLVAIN Laurent",
                  "tel":"509"
              },
              {
                  "id":"77",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"IDMOND Anthony",
                  "tel":"506"
              },
              {
                  "id":"78",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"SALMACIS Christelle",
                  "tel":"500"
              },
              {
                  "id":"79",
                  "pole":"Service communication",
                  "type":"Interne",
                  "nom":"KEE SOON Chloé",
                  "tel":"502"
              },
              {
                  "id":"80",
                  "pole":"Police municipale",
                  "type":"Externe",
                  "nom":"Accueil",
                  "tel":"0262 22 03 89"
              },
              {
                  "id":"81",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"ETHEVE Jimmy",
                  "tel":"119"
              },
              {
                  "id":"82",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"BENESTROF Arlette",
                  "tel":"130"
              },
              {
                  "id":"83",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"LEPERLIER Christine",
                  "tel":"122"
              },
              {
                  "id":"84",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"DARENCOURT Edith",
                  "tel":"120"
              },
              {
                  "id":"85",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"MAILLOT Sébastien",
                  "tel":"124"
              },
              {
                  "id":"86",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"HUBERT Nicolas",
                  "tel":"116"
              },
              {
                  "id":"87",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"PAYET Richard",
                  "tel":"133"
              },
              {
                  "id":"88",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"IDMONT Florent",
                  "tel":"165"
              },
              {
                  "id":"89",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"RIVIERE Patrick",
                  "tel":"119"
              },
              {
                  "id":"90",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"JACQUET Carole",
                  "tel":"108"
              },
              {
                  "id":"91",
                  "pole":"Police municipale",
                  "type":"Interne",
                  "nom":"A.S.V.P",
                  "tel":"193"
              },
              {
                  "id":"92",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"BULIN Georges",
                  "tel":"128"
              },
              {
                  "id":"93",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"DAMBREVILLE BALBINE Stéphania",
                  "tel":"125"
              },
              {
                  "id":"94",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"VIRASSAMY Dominique",
                  "tel":"178"
              },
              {
                  "id":"95",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"LAMY Tony",
                  "tel":"178"
              },
              {
                  "id":"96",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"ZIT Christine",
                  "tel":"127"
              },
              {
                  "id":"97",
                  "pole":"Etat civil",
                  "type":"Interne",
                  "nom":"MADI Fatima",
                  "tel":"167"
              }
          ],
          test: [
          {
            id: 0,
            service: "accueil",
            users: [
              {
                id: "1",
                pole: "Mairie centrale",
                type: "Externe",
                nom: "Accueil",
                tel: "0262 22 20 02",
              },
              {
                id: "2",
                pole: "Mairie centrale",
                type: "Interne",
                nom: "Accueil",
                tel: "100",
              },
              {
                id: "3",
                pole: "Mairie centrale",
                type: "Interne",
                nom: "FRANCOMME Mélanie",
                tel: "106",
              },
              {
                id: "4",
                pole: "Mairie centrale",
                type: "Interne",
                nom: "MIREL Gilberte",
                tel: "162",
              },
              {
                id: "5",
                pole: "Mairie centrale",
                type: "Interne",
                nom: "LATRA Isabelle",
                tel: "146",
              },
              {
                id: "6",
                pole: "Mairie centrale",
                type: "Interne",
                nom: "NAULLEAU Brigitte",
                tel: "101",
              },
            ],
          },
          {
            id: 1,
            service: "Service courriers",
            users: [
              {
                id: "7",
                pole: "Service courriers",
                type: "Interne",
                nom: "IDRI Laurance",
                tel: "179",
              },
              {
                id: "8",
                pole: "Service courriers",
                type: "Interne",
                nom: "REBECA Maryse",
                tel: "147",
              },
            ],
          },
        ],
      }
  },
  computed: {
      // filtre de recherche
      filteredList() {
          return this.contacts.filter(post => {
            return post.nom.toLowerCase().includes(this.liste.toLowerCase())
          })
        }
      },


})
