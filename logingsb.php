<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $pseudo=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$pseudo."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>



<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Accueil.css">
  <link rel="icon" type="image/png" sizes="16x16" href="Onglet.png">
  <title>Gestion de frais GSB</title>
</head>

<body>

  <header>
    <img src="GSB.png" class="img_header">
    <form method="POST" action="#"
    <div class="titre">Gestion de frais - GSB</div>
  </header>
  <div id="content">
    <div class="row">
      <div class="col-md-3">
        <center>
          <p style="margin-top: 25px">
            <i>Saisissez vos identifiants ci contre et accéder à votre espace</i>
          </p>
        </center>
      </div>
      <div class="col-md-9">
        <div class="titre_choix">Cliquez pour vous connecter : </div><br>
        <center><a href="#openModal" class="openModal">Connexion</a></center>

        <div id="openModal" class="modalDialog">
            <div>	<a href="#close" title="Close" class="close">X</a>
        
                  <h2 class="modal_title">Espace de connexion</h2>
                  <label>identifiant  : </label>	<input type = "text" name = 'username' placeholder="Saisir votre identifiant">
                  <label>mot de passe : </label>	<input type = "password" name = 'password' placeholder="Saisir votre mot de passe">
                  <center><span><a href="Statut.html"></a></span></center>
            </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
</body>

</html>