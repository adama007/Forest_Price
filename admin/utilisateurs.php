<?php
include('../connexion.php');
 session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');

}

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher les utilisateurs</title>
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
      <fieldset>
      <legend>Utilisateurs</legend>
      <table>
          <tr>
              <th  style="padding-right:20px;border-bottom: 2px solid blue; ">id</th>
              <th style="padding-right:20px ;border-bottom: 2px solid blue;">nom </th>
              <th style="padding-right:20px ;border-bottom: 2px solid blue;">prénom</th>
              <th style="padding-right:20px;border-bottom: 2px solid blue;" >email</th>
              <th  style="padding-right:20px;border-bottom: 2px solid blue;" >mot de passe </th>
           
          </tr>
          <?php
           $sql="select * from utilisateurs";
           $res=mysqli_query($conn,$sql);
          
              while($ligne=mysqli_fetch_array($res)){
          ?>
          
          <tr>
              <th style="padding-right:20px"><?php echo $ligne['id'];?></th>
              <th style="padding-right:20px"><?php echo $ligne['nom'];?></th>
              <th style="padding-right:20px"><?php echo $ligne['prenom'];?></th>
              <th style="padding-right:20px"><?php echo $ligne['email'];?></th>
              <th style="padding-right:20px"><?php echo $ligne['pass1'];?></th>
              
             
          </tr>
              </form>
          <?php
              }
          ?>
      </table>
  </fieldset>




    
</body>
</html>