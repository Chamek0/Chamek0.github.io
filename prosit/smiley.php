<?php 
// On met en variables les informations de connexion 
$hote = 'localhost'; // Adresse du serveur 
$login = 'root'; // Login 
$pass = ''; // Mot de passe 
$base = 'test'; // Base de données à utiliser 
 
// On se connecte à la base de données 
mysql_connect($hote, $login, $pass); 
 
// On selectionne la base de données souhaitée 
mysql_select_db($base); 
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="images/mickey.jpg">
    <link href="styles/test.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">


    <title>Exiadrink</title>
  </head>
  <body>

    <header>
    <ul>
      <li><a><img id="logo"src="images/cesi.svg"></a></li>
      <nav>
        <li><a id="file:///home/damien/Documents/projet_web/exiadrink/index.html">Accueil</a></li>
        <li><a href="file:///home/damien/Documents/projet_web/exiadrink/facture.html">A-propos</a></li>
        <li><a href="file:///home/damien/Documents/projet_web/exiadrink/facture.html">Inscription</a></li>
        <li><a href="Connexion.html">Connexion</a></li>
        <li><a href="Avis.html">Avis</a></li>
        <li><a href="Contact.html">Contact</a></li>
      </nav>
    </ul>
  </header>

 <div class="content">
  <div class="item1">
      <table>
        <td>
          <article>
            <header>
              <h2 id="page1">
                &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606  &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606 &#x1F606

              </h2>
              <h2 id="page2">
                
               &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608  &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608 &#x1F608
              </h2>
              <h2 id="page3">
                 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615 &#x1F615
              </h2>
            </header>
          </article>
        </td>
      </table>
      <div class="pagination">
        <button id="1">1</button>
        <button id="2">2</button>
        <button id="3">3</button>
      </div>

    </div>
  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script type="text/javascript" src="scripts/main.js"></script> 
</body>
<link rel="stylesheet" type="text/" href="">
</html>