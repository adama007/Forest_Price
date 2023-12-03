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
    <title>ajouter article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
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

<table class="table">
  <thead class="thead-dark">
    <tr>
        
      <th scope="col"   style="font-size:large;padding-right:30px">num_par</th>
      <th scope="col" style="padding-right:30px">Petite description</th>
      <th scope="col" style="padding-right:30px">descritpion</th>

      <th scope="col" style="padding-right:30px">localisation</th>
      <th scope="col" style="padding-right:30px">Prix</th>
      <th scope="col" style="padding-right:30px">image</th>
      
      <th scope="col" style="margin-left:10px;"></th>
    </tr>
    
  </thead>

  <?php
           $sql="select * from article";
           $res=mysqli_query($conn,$sql);
          
              while($result=mysqli_fetch_array($res)){
          ?>
    <tr>
        
      <th scope="row"  style="font-size:large;padding-right:30px"><?php echo $result['num_art'];?></th>
      <td  style="font-size:x-large;padding-right:30px"><?php echo $result['p_description'];?></td>
      <td  style="font-size:x-large;padding-right:30px"><?php echo $result['description'];?></td>
      <td  style="font-size:x-large;padding-right:30px"><?php echo $result['localisation'];?></td>
      <td  style="font-size:x-large;padding-right:30px"><?php echo $result['prix'];?>DT</td>
      <td ><a href="<?php echo $result['image_path'];?>">voir la photo</td>
      <th style="font-size:large;padding-right:30px "><a href="update_art.php?num_art=<?=$result['num_art'];?> "style="color:red;text-decoration:none">Modifier</a></th>
    
    </tr>
    
    <?php 
       }
       ?>
  </tbody>
</table>
    </body>
    </html>