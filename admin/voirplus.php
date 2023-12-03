
<?php

session_start();
include('../connexion.php');
if(isset($_GET['num_art']) AND !empty($_GET['num_art'])){
   $getid=$_GET['num_art'];
   $search="Select * from article where num_art like '$getid' "; 

   $result=mysqli_query($conn,$search);

   if($result){
       while($row=mysqli_fetch_array($result)){
           $num_art=$row['num_art'];
           $p_description=$row['p_description'];
           $localisation=$row['localisation'];
           $prix=$row['prix'];
           $description=$row['description'];
           $image_path=$row['image_path'];
          
       }
   }else{
       echo "no data found for this id";
   }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.9s;
  width: 80%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
<div class="card" style=" padding: left 160px;   ">
  <img class="card" src="<?php echo $image_path;?>"width=80% height=80% style="padding-left:110px" alt="Card image cap">
  <div class="container">
    <h2 class="card-title"style="text-align:center;"><?php echo $p_description;?></h2>
    <h4 class="card-text"style="text-align:center"><?php echo $description;?></h4>
    <p class="card-text"style="text-align:center"><?php echo $localisation;?></p>
    <p class="card-text"style="text-align:center"><?php echo $prix;?>DT</p>
   
  </div>
</div>
</body>
</html>