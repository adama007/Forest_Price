<?php
session_start();
if(isset($_POST['connecter'])){
    if(!empty($_POST['pass']) AND !empty($_POST['nom'])){
        $_nom_par_defaut="admin";
        $_pass_par_defaut="admin123";
        $nom_saisi=htmlspecialchars($_POST['nom']);
        $pass_saisi=htmlspecialchars($_POST['pass']);
        if($nom_saisi==$_nom_par_defaut AND $pass_saisi==$_pass_par_defaut ){
          $_SESSION['pass']=$pass_saisi;
          header('location:index.php');
        }else{
            echo"<script>alert('votre mot de passe ou votre pseudo est incorrect')</script>";
        }
        

    }else{
        echo"<script>alert('remplir tous les champs ')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
    <div class="page">
    <form method="POST" action="" >
        <input type="text" name="nom" autocomplete="off">
        <br>
        <input type="password" name="pass">
        <br><br>
        <input type="submit" name="connecter">
</div>
</body>
</html>