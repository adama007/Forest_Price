<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parcelle";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['pass1'];


$select = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email = '$email'");
if(mysqli_num_rows($select)>0) {
    echo  "(\'Cet utilisateur est déja inscrit , il faut changer l'email\'
    )";
}else{  
    $sql = 'INSERT INTO utilisateurs VALUES ("","'.$nom.'", "'.$prenom.'","'.$email.'","'.$password.'")';
    if($conn->query($sql)===TRUE){
        echo"nouvel enregistrement crée avec succés";
        header('location:utilisateurs.php'); 
        
    }else{
        echo"erreur ";
    }}

$conn->close();

?>