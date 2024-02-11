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
                    <h1 style="text-align: center;">Sujet d&apos;examen du 23/05/2022 (Première session) </h1>
                </div>

            </div>
            
        </div>
        
</div>


<div class="w3-row ">
    <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
             
            <div class="w3-card-4 w3-margin w3-white">

            <a href="Examen.pdf" style="text-decoration: none;">
    <button class="w3-button w3-block" id="sumcss"><i class="bi bi-file-arrow-down""></i> Consultez le sujet en pdf</button>
</a>

            </div>
            
        </div>
        
</div>


<!--
<div class="w3-row ">
    <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <div class="w3-card-4 w3-margin w3-white">

            <a href="Calculator/index.php" style="text-decoration: none;">
    <button class="w3-button w3-block" id="sumcss"><i class="bi bi-file-arrow-down""></i> Consultez la correction en pdf</button>
</a>


            </div>
            
        </div>
        
</div>
-->

    <div class="w3-row ">
        <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
 
                <div class="w3-container">
                    <h2 style="text-align: center;">Quizz</h2>
                    <pre class="prettyprint">
1. PHP est-il le seul langage permettant de coder des applications côté serveur ?
(a) Oui (b) Non
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(b) Non
</pre>
</details>


<pre class="prettyprint lang-php linenums">
2. En imaginant que le script suivant est accédé par l&apos;URL script.php?name=bob, qu&apos;affiche le code suivant ?
&lt;?php 
$name = "anonymous";
if (isset($_GET[&apos;name&apos;])) {
    name = $_GET[&apos;name&apos;];
}
echo "Hello $name";
?&gt;
(a) Hello bob (b) Hello anonymous
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(b) Hello anonymous
En effet, il manque le $ à la ligne 5, la valeur de la variable $name ne change donc pas.
</pre>
</details>


<pre class="prettyprint lang-html">
3. En CSS, quel est le sélecteur qui permet de sélectionner la balise div de la ligne 2?
&lt;body&gt;
&lt;div class=&apos;foo&apos;&gt;Some very interesting content &lt;/div&gt;
&lt;/body&gt;
(a) div.foo (b) div#foo (c) div foo
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(a) div.foo
</pre>
</details>


<pre class="prettyprint lang-html">
4. Le code HTML suivant est-il correct ?
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;&lt;title&gt;&lt;/title&gt;&lt;/head&gt;
&lt;body&gt;
&lt;p&gt;Hello &lt;br&gt; world! &lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
(a) Oui (b) Non
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(a) Oui
</pre>
</details>

<pre class="prettyprint lang-php">
5. Dans le code PHP suivant, qu&apos;affiche l&apos;instruction de la ligne 5?
&lt;?php
for ($i = 0; $i < 10; $i++) {
    $j = $i;
}
echo $j;
?&gt;
(a) 0 (b) 10 (c) 11 (d) Une erreur, la variable j n&apos;est pas définie
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(b) 10
</pre>
</details>


<pre class="prettyprint lang-html">
6. Compte tenu des codes HTML et CSS suivants, de quelle couleur sera affiché l&apos;élément h1 ?
&lt;body&gt;
&lt;h1&gt;This is the title&lt;/h1&gt;
&lt;/body&gt;

body h1 {
    color: red;
}
h1 {
    color: blue;
}
(a) Noir (b) Bleu (c) Rouge
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(c) Rouge
</pre>
</details>


<pre class="prettyprint lang-html">
7. Quel est le code HTML correct pour faire référence à une feuille de style externe ?
    (a) &lt;style src="style.css"&gt;
    (b) &lt;stylesheet&gt; style.css &lt;/stylesheet&gt;
    (c) &lt;link rel="stylesheet" type="text/css" href="style.css"&gt; 
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(c) &lt;link rel="stylesheet" type="text/css" href="style.css"&gt; 
</pre>
</details>


<pre class="prettyprint lang-html">
8. Comment s&apos;appelle la plateforme permettant de visualiser sa base de données ?
    (a) MysqlMyAdmin
    (b) Localhost
    (c) vvv.pedago.enseirb.fr
    (d) PhPMyAdmin
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(d) PhPMyAdmin
</pre>
</details>


<pre class="prettyprint lang-html">
9. Un formulaire &lt;form method="post"&gt; ... &lt;/form&gt; utilisera l&apos;URL pour passer les valeurs saisies par l&apos;utilisateur
    (a) Vrai (b) Faux
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(b) Faux
</pre>
</details>


<pre class="prettyprint lang-html">
10. En SQL, comment peut-on sélectionner la coloenne "FirstName" d&apos;une table "Persons" ?
    (a) EXTRACT FirstName FROM Persons
    (b) SELECT Persons.FirstName
    (c) SELECT FirstName FROM Persons
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
(c) SELECT FirstName FROM Persons
</pre>
</details>


<hr>
                </div>
            </div>
            <hr>
        </div>
    </div>



        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2 style="text-align: center;">Exercices</h2>
                        <h3> HTML</h3>
                        <pre class="prettyprint">
Ecrire le code HTML créant un bouton avec le texte "Cliquer ici" dans un formulaire.
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint">
&lt;form&gt;
    &lt;input type="submit" value="Cliquer ici"&gt;
&lt;/form&gt;
</pre>
</details>

                        <h3> CSS</h3>
                        <pre class="prettyprint">
Ecrire le code CSS permettant de définir la couleur d'arrière-plan de la page sur rouge.
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint lang-css">
body {
    background-color: red;
}
</pre>
</details>


<pre class="prettyprint">
Ecrire le code CSS permettant de centrer les paragraphes.
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint lang-css">
p {
    text-align: center;
}
</pre>
</details>

                        <h3> MYSQL</h3>
                        <pre class="prettyprint">
Ecrire le code SQL pour récupérer toutes les données de la table Customer où la colonne CustomerID vaut 32.
</pre>
<details>
  <summary><b>Correction</b></summary>
<pre class="prettyprint lang-sql">
SELECT * FROM Customer WHERE CustomerID = 32;
</pre>
</details>
                        <br />
                    </div>
                </div>
                <hr>


                <style>

                    .false {
                        background-color: red;
                    }

                    .true {
                        color: green;
                        font-weight: bold;
                    }

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
                    #sumhtml {
  background: #81d4fa;
  color: #FFF;
  border-radius: 3px;
  padding: 5px 10px;
  outline: none;
}
                </style>
            </div>
            <?php include("../includes/footer.html"); ?>