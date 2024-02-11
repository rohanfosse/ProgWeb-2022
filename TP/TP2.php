<? session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title> IT103 | <?php echo basename(getcwd()) ?></title>
<link rel="icon" type="image/x-icon" href="../laptop.svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://rohanfosse.com/ProgWeb/css/test_menu.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>



<style>
pre {
  white-space: pre-wrap;
  word-wrap: break-word;
  text-align: justify;
}

.progress-container {
  position: fixed;
  width: 100%;
  height: 10px;
}

.progress-bar {
  height: 10px;
  background: rgb(183, 239, 253);
  width: 0%;
}
body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        li.L0,
        li.L1,
        li.L2,
        li.L3,
        li.L5,
        li.L6,
        li.L7,
        li.L8 {
            list-style-type: decimal !important;
        }
#back2Top {
    width: 50px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    position: fixed;
    bottom: 50px;
    right: 50px;
    color: #555;
    text-align: center;
    font-size: 50px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}

</style>
<script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function() {myFunction()};
    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

    </script>
</head>

<body class="w3-light-grey">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>  


          

      <nav>
          <li><a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103" class="logo"> <i class="bi bi-globe"></i> IT103</a>  </li>    
  <ul id="main">
  
  <div class="header">
  
        <div class="header-right">
        
          <a class="active" href="https://rohanfosse.com/ProgWeb/index.php"><li>Accueil</li></a>
          <li onclick="Project()">Projet</li>
    
    <li>Cours
      <ul class="drop">
        <div>
          <a href="https://rohanfosse.com/ProgWeb/slides.php"><li>Slides</li></a>
          <a href="https://rohanfosse.com/ProgWeb/articles/article_css.php"><li>HTML/CSS</li></a>
          <a href="https://rohanfosse.com/ProgWeb/articles/article_php.php"><li>PHP</li></a>
          <a href="https://rohanfosse.com/ProgWeb/articles/article_sql.php"><li>MYSQL</li></a>
          <a href="https://rohanfosse.com/ProgWeb/Quizz/Quizz.php"><li>Quizz</li></a>
          <a href="https://rohanfosse.com/ProgWeb/Examen/Sujet.php"><li>Examen</li></a>
        </div>
      </ul>
    </li>
    <li>TP
      <ul class="drop">
        <div>
          <a href="https://rohanfosse.com/ProgWeb/TP/TP1.php"><li>TP1</li></a>
        <a href="https://rohanfosse.com/ProgWeb/TP/TP2.php"><li>TP2</li></a>
        </div>
      </ul>
    </li>
    <li onclick="Contact()">A propos</li>
    <div id="marker"></div>
  </ul>
</nav>
          
          
        </div>
      </div>
      <script>
        function Project() {
          location.replace("https://rohanfosse.com/ProgWeb/Projet/project.php")
        }

        function Contact() {
          location.replace("https://rohanfosse.com/ProgWeb/contact.php")
        }

        </script>    

      <a id="back2Top" title="Back to top" href="#"><i class="bi bi-arrow-90deg-up"></i></a>



<hr>

<div class="w3-row ">
    <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">

                <div id="title"  class="w3-container">
                    <h1 style="text-align: center;">TP2 - Calculatrice en PHP avec base de données </h1>
                </div>
            </div>
        </div>
</div>


    <div class="w3-row ">
        <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">

                <div class="w3-container">
                    <h2 style="text-align: center;">Le Sujet</h2>
                    <pre class="prettyprint">
Dans ce TP, nous allons développer une calculatrice scientifique en PHP en utilisant
une base de données.
Il s agit d une calculatrice scientifique qui peut effectuer les tâches
arithmétiques simples (+, -, * et /) ainsi que d autres fonctions mathématiques,
telles que sin, cos, tan, min, max, log, exposant, pi, puissance et racine carrée.

Le code sera écrit dans un fichier PHP calc.php.
Toutes les informations devront être stockées dans une base de données MySQL.
Chaque utilisateur pourra s inscrire et se connecter sur votre site.
Nous pourrons pour cela récupérer le code du TP précédent.

Les calculs qu il effectuera seront associés à son identifiant.
Il sera donc possible de consulter l historique des calculs qu il a effectué.

BONUS:
- Rajouter un bouton permettant d effacer l historique des calculs.
- Calculer la moyenne/mediane/ecarts-types des calculs effectués.
- Ajouter un bouton permettant d afficher la liste des utilisateurs inscrits.

</pre>
<br>
<a href="Calculator/index.php" style="text-decoration: none;">
    <button class="w3-button w3-block w3-blue "><i class="bi bi-globe"></i> Consultez un exemple</button>
</a>
<hr>
                </div>
            </div>
            <hr>
        </div>

        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2 style="text-align: center;">Envoyez moi votre code !</h2>
                        <pre class="prettyprint">
 A la fin de la séance, créer une archive NOM_PRENOM.zip comprenant :
    - les différents fichiers PHP;
    - les fichiers CSS pour la mise en page;
    - Une rapide explication dans un fichier .txt si nécessaire
envoyez le moi en cliquant sur le bouton ci-dessous.
</pre>
                        <br />
                        <button class="w3-button w3-block w3-blue " onclick="sendfile()"><i class="bi bi-cloud-upload"></i> Cliquez ici !</button>

                        <br />
                    </div>
                </div>
                <hr>
                <script>
                    var client = filestack.init("AYkhU5C8ySnaawchTAX52z");

                    function sendfile() {
                        console.log("Picking Watermark");
                        //Limiting file types and number for uploading in the picker
                        client.pick({
                            //Only accepting at most 1 file
                            maxFiles: 10,
                            accept: ['text/*', '.zip', '.tar.gz'],
                            fromSources: ["local_file_system"],
                        });
                    }
                </script>



                <style>
                    details {
                        border-radius: 3px;
                        background: #EEE;
                        margin: 1em 0;
                    }

                    #title {
                        background: rgb(77, 162, 248);
                        color: #FFF;
                    }

                    #sumcss {
                        background: #ff8a65;
                        color: #FFF;
                        border-radius: 3px;
                        padding: 5px 10px;
                        outline: none;
                    }

                    /* Style the summary when details box is open */
                    details[open] summary {
                        background: #69c773;
                        color: #333;
                    }
                </style>
            </div>
            <?php include("../includes/footer.html"); ?>