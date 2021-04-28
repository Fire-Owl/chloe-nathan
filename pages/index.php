<?php include '../include/header.php'; ?>
<style>
body {
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: start;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="web-designer.php">Web designer, qu'est ce que c'est ? </a>
    <a href="chef-projet.php">Q'est-ce que le metier de chef de projet ? </a>
    <a href="graphiste.php">Graphiste, un métier créatif</a>
    <a href="motion-designer.php">Mission de l'animateur graphique ( motion designer web)</a>
    <a href="pentesteur.php">Le pentesteur, Le Corsaire des Hackers</a>
    <a href="story.php">Notre Histoire</a>
    <a href="contacts.php">Contacts</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
if ( window.addEventListener ) {
var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
window.addEventListener("keydown", function(e){
kkeys.push( e.keyCode );
if ( kkeys.toString().indexOf( konami ) >= 0 ) {
alert('Rick Astley mode activate');
window.location = "https://www.youtube.com/watch?v=dQw4w9WgXcQ";
}
}, true);
}
</script>

<!--endnav bar-->
<!--startintro-->
<div class="row pt-5">

<div class="col-md-5 col-sm-12 order-md-1 order-sm-2">
    <h1 class="Coeurwebtitle">
    Les metiers Web, pas toujours facile de s’y retrouver! 
    </h1>
    <h1 class="text">
    On va vous aidez !
    </h1>
    <button type="button" class="btn logoipsum-btn-purple btn-lg pb-3 pt-3"><a href="error-404.php">Let's go</button></a>
</div>
<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-2 order-sm-1">
    <img src="../assets/images/Lost.svg" class ="imagetext">
</div>

</div>
<!--endintro-->

<!--startarticle-->
<div class="row pt-5">

<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-1 order-sm-1">


    <img src="../assets/images/Websdesigner.svg" class ="imagetext">

</div>

<div class="col-md-5 col-sm-12 order-md-2 order-sm-2">
    <h1 class="Coeurwebtitle">
    Web designer, qu’est ce que c’est ?
    </h1>
    <p class="text-black-50 fs-4">
    Le webdesigner est un de ces métiers qui n’existaient pas il y a 20 ans.
    Son rôle ?
    C’est de « dessiner » ou plutôt de concevoir le graphisme d’un site ou d’un produit sur une page web Le webdesigner 
    (appelé également infographiste ou graphiste) est, selon la formule consacrée, « le créatif multimédia du numérique ».
 
    </p>
    <div class="col-12"><a class="nav-link" href="web-designer.php"><b>En savoir plus</b></a></div>
   
</div>

</div>

</div>
<div class="row pt-5">

<div class="col-md-5 col-sm-12 order-md-1 order-sm-2">
    <h1 class="Coeurwebtitle">
    Qu’est-ce que le métier de chef de projet ?
    </h1>
    <p class="text-black-50 fs-4">
    Le chef de projet a pour mission principale de prendre en main le cahier des charges d’un projet et de le mettre en œuvre en analysant les besoins, réalisant des reportings… Le travail en équipe est primordial pour ce professionnel. En effet, le directeur de projet est en relation avec les différents employés d’une entreprise (graphistes, assistants-chefs de projet, chefs de produit, développeurs web, intégrateurs…) il est amené a leur confie des missions pour mener à bien le projet.
    </p>
    <div class="col-12"><a class="nav-link" href="chef-projet.php"><b>En savoir plus</b></a></div>
    
   
</div>
<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-2 order-sm-1">


    <img src="../assets/images/chefdeprojet.svg" class ="imagetext">

</div>

</div>
</div>
<!--endarticle-->
<!--starchoice-->
<div class="row pt-5"></div>
<div class="container3">
     <div class="row align-items-start">
          <div class="col"><a href="motion-designer.php">
             <img src="../assets/images/motiondesignmini.svg" class="motiondesignmini" alt="..."></a>
             <h5 class="tittle1"><b>Motion designer web</b></h5>
         </div>
          <div class="col"><a href="graphiste.php">
             <img src="../assets/images/graphiste1.svg" class="graphiste1" alt="..."></a>
             <h5 class="tittle1"><b>Graphiste, un métier créatif</b></h5>
         </div>
          <div class="col"><a href="pentesteur.php">
             <img src="../assets/images/pentesteurminia.svg" class="pentesteurminia" alt="..."></a>

             <h5 class="tittle1"><b>Le Pentesteur</b></h5>
         </div>
      </div>
 </div>
</div>
<div class="row pt-5"></div>
<!--endchoice-->




<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="../assets/scripts/main.js"></script>
</main>
<?php include '../include/footer.php'; ?> 
</body>
</html>
