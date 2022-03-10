<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="images/mickey.jpg">
    <link href="styles/style4.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
   <body>
          <a href="http://exiadrink.com/secret.php">secret.php</a>
          <a href="http://exiadrink.com/index.php">index.php</a>
          <a href="http://exiadrink.com/index.html">index.html</a>
          <a href="Connexion.html">Connexion</a>
          <a href="Avis.html">Avis</a>
          <a href="Contact.html">Contact</a>
    <?php 
      // reception cookie :
    echo $_COOKIE["TestCookie"];
    // reception get :
 //echo 'Bonjour ' . htmlspecialchars($_GET["name"]) . '!';
    // reception post :
echo 'Bonjour ' . htmlspecialchars($_POST["name"]) . '!';
// reception session:
session_start();
echo $_SESSION['favcolor'];
?>

</body>
</html>