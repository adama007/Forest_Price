<?php

session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');
} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ajouter admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="chemin/vers/le/script.js"></script>
    
</head>
  <body>
  <ul style=" list-style-type: none;
  
  overflow: hidden;
 ">
  <li style="float: left;  margin-right:20px;  background-color: #333;"> <a href="index.php" style=" display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;" >Page d'acceuil</a></li>
  <li style="float: left;  margin-left:1200px;background-color: #333;"> <a href="logout.php" style=" display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;" >logout</a></li>
</ul>   
  <script src="../admin/test.js" type="text/javascript"></script>
  <div class="container p-4 mt-4">
         <div class="row justify-content-evenly mt-4">
            <div class="col-lg-6 col-md-12 mt-4">
                <div class="d-flex">
      <h1>ajouter un utilisateurs</h1>
</div>
<div class="p-6 shadow-lg p-3 mb-5 bg-body rounded" style="background-color: white">
      <form method="POST" action="../admin/ajout.php"  name="RegForm" onsubmit="return validateForm()" >
      <div class=" mb-3">
                          
                         
                          </div>
      <div class=" mb-3">

                            <label  class="form-label">nom</label>
                            <div class="input-group">           
        <input type="text" placeholder="nom" name="nom" id="nom" />
        
        </div>
       
        <div class=" mb-3">
        <label>prénom</label>
        <div class="input-group">
        <input type="text" placeholder="prénom" name="prenom" id="prenom"/>
        
</div>
<div class=" mb-3">
        <label>Email</label>
        <div class="input-group">
        <input type="email" placeholder="adresse email" name="email" id="email"/>
    
</div>
<div class=" mb-3">
        <label>mot de passe</label>
        <div class="input-group">
        <input type="password" placeholder="mot de passe" name="pass1" id="password"  />
      
</div>
<br>
<div class=" mb-3">
<div class="d-flex justify-content-between">
<div class="input-group">
<div class="d-flex justify-content-between">
        <input type="submit" value="ajouter"  />
</div>
      </form>
      
      </div>
                          
                           
                          </div>
                          
                                     
                    
             </div>
            </div>

  </body>
</html>

