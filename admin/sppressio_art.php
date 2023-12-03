<?php

 session_start();
 include('../connexion.php');
if(isset($_GET['num_art']) AND !empty($_GET['num_art'])){
    $getid=$_GET['num_art'];
    $sql = "DELETE FROM article WHERE num_art=$getid";
 
if ($conn->query($sql) === TRUE) {
  
   
  
       header('location:supprimer_art.php');
    
  
} else {
  echo "Error deleting record: " . $conn->error;
}
}

$conn->close();
?>
