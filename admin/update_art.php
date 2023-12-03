<?php
session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');
}
include("../connexion.php");
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
    
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <title>ajouter article</title>
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
<div class="container p-4 mt-4">
         <div class="row justify-content-evenly mt-4">
            <div class="col-lg-6 col-md-12 mt-4">
                <div class="d-flex">
                     <h2>ajouter un article</h2>
                </div>
                <div class="p-6 shadow-lg p-3 mb-5 bg-body rounded" style="background-color: white">
                <form method="POST" action="update_art.php" class="form"  >
                        <div class=" mb-3">
                        <?php echo (isset($getid)?$getid :'')?>
                         
                        </div>
                        <div class=" mb-3">
                            <label  class="form-label">numéro d'article</label>
                            <div class="input-group">
                              
                              <input type="text" name="num_art"  value="<?php echo (isset($getid)?$getid :'')?>" placeholder=" "class="form-control"/>
                            </div>
                        <div class=" mb-3">
                            <label  class="form-label">petite description</label>
                            <div class="input-group">
                              
                              <input type="text"  value="<?php echo (isset($p_description)?$p_description :'')?>"name="p_description" placeholder=" "class="form-control"/>
                            </div>
                           
                          </div>
                          <div class=" mb-3">
                          <label  class="form-label">localisation</label>
                          <div class="input-group">
                            
                            <input type="text" value="<?php echo (isset($localisation)?$localisation :'')?>" name="localisation" placeholder=" "class="form-control"/>
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">prix</label>
                          <div class="input-group">
                            
                            <input type="text" name="prix"  value="<?php echo (isset($prix)?$prix :'')?>" placeholder=" "class="form-control"/>
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">description</label>
                          <div class="input-group">
                            
                            <input type="text" name="description"  value="<?php echo (isset($description)?$description :'')?>" placeholder=" "class="form-control"/>
                            
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">photo</label>
                          <br>
                          <input type="text" name="image"
                          value="<?php echo (isset($image_path)?$image_path :'')?>"required>  
                          <div class="input-group">
                            
                            
                          </div>
                         
                        </div> 
                        <div class="d-flex justify-content-between">
                        <input type="submit" name="Modifier" value="Modifier">
  
                        </div>
                        
                        </form> 
                          </div>
                          
                           
                          </div>
                          
                                     
                    
             </div>
            </div>
       




</body>
</html>
<?php
    if(isset($_POST['Modifier'])){
            $num_art=$_POST['num_art'];
            $p_description=$_POST['p_description'];
            $localisation=$_POST['localisation'];
            $prix=$_POST['prix'];
            $description=$_POST['description'];
            $image_path=$_POST['image'];
        $sql="update article set p_description='$p_description',  localisation='$localisation',prix='$prix' ,description='$description' where num_art like '$num_art' ";

        if($conn->query($sql)){
            echo "modification avec succés";
            
            
        }else{
            echo "error".$conn->error;
        }$conn->close();
    }
?>

