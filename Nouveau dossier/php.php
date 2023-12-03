<?php
include("../connexion.php");
$msg = '';
if(isset($_POST['upload'])){
$image = $_FILES['image']['name'];
$path = 'images/'.$image;
$sql = 'INSERT INTO slider VALUES ("","'.$path.'")';
$conn->query($sql);
if ($sql){
    move_uploaded_file($_FILES['image']['tmp_name'],$path);
    $msg='image uploaded successefuly';

}
else{
    $msg='image uploaded failed';

}

}
$result = mysqli_query($conn, "SELECT image_path FROM slider" );


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dynamic site</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h2 class ="text-center bg-dark text-light pb-2">dynamic </h2>
<div class="container-fluid">
    <div class="row justify-co ntent-center">
    <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  
  <?php
      $i=0;
      foreach($result as $row){
          $actives='';
          if($i==0){
              $actives='active';
          }
      
      ?>
      <li data-target="#demo" data-slide-to="<? =$i;?>" class="<?= $actives;?>"></li>
   
   <?php $i++;}?>
   
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  
  <?php 
      $i=0;
      foreach($result as $row){
          $actives='';
          if($i==0){
              $actives='active';
          }
      
      ?>
  <div class="carousel-item <?=$actives;?>">
      <img src="<?= $row['image_path'] ?>" width="100px" height="100px">
    </div>
    <?php $i++; }?>
  </div>

  
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>
        <div class="col-lg-4 bg-dark rounded px-4">
            <h4 class="text-center text-light p-1">select image to upload!</h4>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
    <input type="file" name="image" class="form-control p-1" required>
</div>
     <div class="form-group">
         <input type="submit" name="upload" class="btn btn-warning btn-block" value ="image upload">
<div class="form-group">
   <h5 class="text-center text-light"><?= $msg; ?></h5>

   </h5> 
</div>

</div>
</form>
        </div>
</div> 



</div>












    
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>