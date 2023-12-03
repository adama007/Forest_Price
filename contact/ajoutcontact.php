<?php
include("../connexion.php");
$nom=$_POST["nom"];
$email=$_POST["email"];
$message=$_POST["message"];





//echo($nom.$prenom.$date_nai.$genre.$niveau);
$sql='INSERT INTO contact Values("'.$nom.'","'.$email.'","'.$message.'")';
if($conn->query($sql)===true){
    echo("enregistrement avec succés");
    header("location:../acceuil.php");
}else{
    echo("error");
}
?>