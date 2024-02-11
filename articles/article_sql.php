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


      
<?php include "../includes/connect.php"; // Inclure le fichier ?>

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>Cours de SQL</b></h1>
        </header>

        <hr />


        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Quelques liens utiles</h2>
                        <ul>
                          <li><a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/slides.php">Slides du cours</a></li>
                          <li><a href="https://www.labri.fr/perso/falleri/perso/ens/it103/m3/">Site de Jean-Rémy Falleri</a>
                          </li>
                          <li><a href="https://www.w3schools.com/sql/default.asp">Tutoriel SQL</a></li>
                          <li><a href="https://vvv.enseirb-matmeca.fr/aaa/phpmyadmin/">phpMyAdmin</a></li>
                        </ul>
  
                    </div>
                </div>
            </div>
            <hr>

        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2 style="text-align: center;">Connexion à la base de données</h2>
                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">connexion.php</span><br/>
                        <pre class="prettyprint linenums lang-php">
&lt;?php
    function connect() {
        $servername = "localhost";
        $username = "LOGIN";
        $password = "PWD_MAIL";
        $dbname = "LOGIN";

        // On crée notre connexion
        $conn = new mysqli($servername, $username, $password, $dbname);
        // On vérifie si elle a bien fonctionnée
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
?&gt;
</pre>
où <b>LOGIN</b> (login de l'enseirb) et <b>PWD_MAIL</b> (mot de passe reçu par mail) sont les identifiants de connexion à la base de données.
<br/>

                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>
                        <pre class="prettyprint linenums lang-php">
&lt;?php
    include "connexion.php"; // Inclure le fichier
    $conn = connect(); // On se connecte à la base de données
    // On effectue le reste du code
?&gt;
</pre>

                    </div>
                </div>
            </div>


            <hr>

            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Création de notre première table</h2>
                        L'exemple suivant permet de créer une table dans la base de données. <br/>

                        <span class="w3-tag">SQL</span> <span class="w3-tag" style="background-color: #a19f9f">create_table.sql</span><br/>

                        <pre class="prettyprint linenums lang-sql">
CREATE TABLE table_exemple (
    `ID` INT NOT NULL AUTO_INCREMENT, -- Une colonne ID de type INTEGER
    `NAME` VARCHAR(45) NULL, -- Une colonne NAME de type VARCHAR
    `SURNAME` VARCHAR(45) NULL, -- Une colonne SURNAME de type VARCHAR
    PRIMARY KEY (`ID`) -- On définit la clé primaire
);
</pre>
La table crée est <b>table_exemple</b> et elle contient les colonnes suivantes :
<ul>
    <li><b>ID</b> : identifiant unique de la table</li>
    <li><b>NAME</b> : nom de la personne</li>
    <li><b>SURNAME</b> : prénom de la personne</li>
</ul>

<h3 style="text-align:center;"> Comment créer notre table ?</h3>
<pre class="prettyprint linenums lang-text">
Ouvrir le lien <a href="https://vvv.enseirb-matmeca.fr/aaa/phpmyadmin/">phpMyAdmin</a>
Selectionner la base de données <b>LOGIN</b>
Importer le fichier <b>create_table.sql</b>
</pre>
<h4 style="text-align:center;"><u>OU</u></h4>
<pre class="prettyprint linenums lang-text">
Ouvrir le lien <a href="https://vvv.enseirb-matmeca.fr/aaa/phpmyadmin/">phpMyAdmin</a>
Selectionner la base de données <b>LOGIN</b>
Cliquer sur le bouton <b>Create table</b>
Saisir le nom de la table <b>table_exemple</b>
Saisir les colonnes.
</pre>
                    </div>
                </div>
            </div>
            <hr>

            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Insérer des données</h2>

                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>

                        <pre class="prettyprint linenums lang-php">
&lt;?php
    include "connexion.php"; // Inclure le fichier
    $conn = connect(); // On se connecte à la base de données
    $name = "John";
    $surname = "Doe";
    $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`) VALUES ('$name','$surname')";
    $result = $conn->query($sql);// On lance la requête
    if ($result == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "&lt;br&gt;" . $conn->error;
    }
?&gt;
</pre>

                    </div>
                </div>
            </div>
            <hr>

            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;" id="select_simple">Récupérer des données depuis une base de donnée</h2>

                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>

                        <pre class="prettyprint linenums lang-php">
&lt;?php
    include "connexion.php"; // Inclure le fichier
    $conn = connect(); // On se connecte à la base de données
    $sql = "SELECT * FROM `table_exemple`";
    $result = $conn->query($sql);// On lance la requête
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"]. " - Name: " . $row["NAME"]. " - Surname: " . $row["SURNAME"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?&gt;
</pre>
                    </div>
                </div>
            </div>
            <hr>


            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;" id="insert_form">Insérer des données à l'aide d'un formulaire</h2>

                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>

                        <pre class="prettyprint linenums lang-php">
&lt;form action="&lt;?php $_PHP_SELF; ?&gt;" method="post"&gt;
    &lt;input type="text" name="name"&gt;
    &lt;input type="text" name="surname"&gt;
    &lt;input type="submit" name="submit"&gt;
&lt;/form&gt;
&lt;?php
    if(isset($_POST["submit"])){
        include "connexion.php"; // Inclure le fichier
        $conn = connect(); // On se connecte à la base de données
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`)
         VALUES ('$name','$surname')";
        $result = $conn->query($sql);// On lance la requête
        if ($result === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "&lt;br&gt;" . $conn->error;
        }
    }
?&gt;
</pre>
<details>
  <summary><b>Essaye ici !</b></summary>
  <form action="<?php $_PHP_SELF; ?>" method="post">
  <input name="name" type="text">
  <input name="surname" type="text">
  <input type="submit" name="submit">
  </form>
  <?php
    if(isset($_POST["submit"])){
        include "../includes/connect.php"; // Inclure le fichier
        $conn = bdd_connect(); // On se connecte à la base de données
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`)
         VALUES ('$name','$surname')";
        $result = $conn->query($sql);// On lance la requête
        if ($result === TRUE) {
            echo "L'enregistrement a été effectué avec succès";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        ?>
            <p style="text-align:center;">
<a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/exemple/sql/select_simple.php">Vérifier que la donnée a bien été insérée</a>
</p>
<?php
    }
    ?>

</details>
<br>
                    </div>
                </div>
            </div>
            <hr>


            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;" id="select_simple">Récupérer des données avec des conditions</h2>

                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>

                        <pre class="prettyprint linenums lang-php">
&lt;?php
    include "connexion.php"; // Inclure le fichier
    $conn = connect(); // On se connecte à la base de données
    $sql = "SELECT * FROM `table_exemple` WHERE `NAME` = 'John'";
    $result = $conn->query($sql);// On lance la requête
    if ($result->num_rows > 0) {
        // on affiche chaque ligne
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"]. " - Name: " . $row["NAME"]. "
             - Surname: " . $row["SURNAME"]. "&lt;br&gt;";
        }
    } else {
        echo "0 results";
    }
?&gt;
</pre>
Dans cet exemple, on sélectionne toutes (et uniquement) les lignes de la table où le nom est John.<br>
<details>
    <summary><b>Rendu</b></summary>
    <pre class="prettyprint linenums lang-text">
    <?php $conn = bdd_connect(); // On se connecte à la base de données
    $sql = "SELECT * FROM `table_exemple` WHERE `NAME` = 'John'";
    $result = $conn->query($sql);// On lance la requête
    if ($result->num_rows > 0) {
        // on affiche chaque ligne
        while($row = $result->fetch_assoc()) {
echo "ID: " . $row["ID"]. " - Name: " . $row["NAME"]. " - Surname: " . $row["SURNAME"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</pre>
</details>
<br>

                    </div>
                </div>
            </div>
            <hr>

            <header class="w3-container w3-center w3-padding-32">
            <h1><b>Travailler depuis chez soi</b></h1>
        </header>
            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;" id="select_simple">Installation de MAMP</h2>
                        Il semblerait que pour une raison inconnu, vous ne puissiez pas accéder à votre site web en dehors de l’ENSEIRB. De plus, le serveur de l’ENSEIRB laggue beaucoup lorsque l’on travaille dessus.

Pour remédier à cela, vous pouvez suivre ce tutoriel <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4237816-preparez-votre-environnement-de-travail">ici</a>  qui permet d’installer le logiciel MAMP permettant de simuler un serveur sur votre machine et de pouvoir travailler en local.

Cela ne marchera que si vous travaillez depuis votre machine personnelle.

                    </div>
                </div>
            </div>
            <hr>

            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;" id="select_simple">Configurer PhpMyAdmin</h2>
                        Lorsque vous avez configuré MAMP, la nouvelle adresse de PhPMyAdmin sera <a href="localhost:8888/phpmyadmin/">localhost:8888/phpmyadmin/</a> les identifiants de PhpMyAdmin sont:
                            <pre class="prettyprint linenums lang-text">
<b>Utilisateur:</b> root
<b>Mot de passe:</b> root
                            </pre>
Il faut penser à créer une nouvelle base de données.
                    </div>
                </div>
            </div>
            <hr>

        </div>


        
    </div>
    <hr>

    <?php include '../includes/footer.html'; ?>