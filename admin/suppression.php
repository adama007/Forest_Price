<?php

 session_start();
 include('../connexion.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid=$_GET['id'];
    $sql = "DELETE FROM utilisateurs WHERE id=$getid";
 
if ($conn->query($sql) === TRUE) {
  
   
  
       header('location:supprimer.php');
    
  
} else {
  echo "Error deleting record: " . $conn->error;
}
}

$conn->close();
?>

    


