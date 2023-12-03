<?php

 session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style_index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page admin</title>
    
</head>
<body style="height:1000px">
<ul style=" list-style-type: none;width:180px;margin-left:84%;  overflow: hidden;background-color: #333; ">
  <li ><a href="logout.php" style="display: block;color: white;font-size:22px;margin-right:51px;text-align: center;padding: 14px 16px;text-decoration: none;" >Logout</a></li>
  
</ul>

<div style="padding-top:20px;padding-bottom:20px;" >
<hr>
<h2> Espace utilisateurs</h2>
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 12.2em 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="ajouter_admin.php">Ajouter un utilisateur<a> 
</div>
    <div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 11.4em 10px 20px; ;color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="utilisateurs.php"> Afficher les utilisateurs<a> 
</div>
<div style="margin-bottom:12px" class="lien">
    <a style="margin-left:2%;padding: 10px 22px 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="supprimer.php"> Supprimer un des utilisateur (en cliquant sur l'id)<a>
</div>
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 10.95em 10px 20px;color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="modifier_utilisateurs.php"> Modifier des utilisateurs<a> 

</div>
</div>
<hr>
<h2 style="margin-left:10px;">Espace contact</h2>
<div style="padding-top:5px">
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 11.5em 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="afficher_messages.php">Afficher les messages<a> 
</div>


</div>
<hr>
<h2 style="margin-left:10px;">Espace articles locales</h2>
<div style="padding-top:5px">
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 13.1em 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="ajouter_article.php">Ajouter un article <a> 
</div>
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 12.3em 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="modifier_article.php">Modifier les articles <a> 
</div>
<div style="margin-bottom:12px" class="lien">
  <a style="margin-left:2%;padding: 10px 12.6em 10px 20px; ; color: white;font-size:20px;text-align: center;text-decoration: none;background-color: #333;" href="supprimer_art.php">Supprimer un article <a> 
</div>


</body>
</html>
 