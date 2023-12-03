
<?php
include("../connexion.php");
 session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');
}
  if(isset($_POST['envoi'])){
  $p_description=$_POST['pdescription'];
  $localisation=$_POST['localisation'];
  $prix=$_POST['prix'];
  $description=$_POST['description'];
  $image = $_POST['image'];
 $sql = 'INSERT INTO article VALUES ("","'.$p_description.'","'.$localisation.'","'.$prix.'","'.$description.'","'.$image.'")';
 if ($conn->query($sql)===TRUE){
   
    echo' ajout with successefuly';


}
else{
  echo"erreur ";

}
  
}
$conn->close();

    
  
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
   <div  style="height: 130vh">
   
    
    <div class="container p-4 mt-4">
         <div class="row justify-content-evenly mt-4">
            <div class="col-lg-6 col-md-12 mt-4">
                <div class="d-flex">
                     <h2>ajouter un article</h2>
                </div>
                <div class="p-6 shadow-lg p-3 mb-5 bg-body rounded" style="background-color: white">
                <form action="" method="post" enctype="multipart/form-data">
                        <div class=" mb-3">
                          
                         
                        </div>
                        <div class=" mb-3">
                            <label  class="form-label">petite description</label>
                            <div class="input-group">
                              
                              <input type="text" name="pdescription" class="form-control"/>
                            </div>
                           
                          </div>
                          <div class=" mb-3">
                          <label  class="form-label">localisation</label>
                          <div class="input-group">
                            
                            <input type="text" name="localisation" class="form-control"/>
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">prix</label>
                          <div class="input-group">
                            
                            <input type="text" name="prix" class="form-control"/>
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">description</label>
                          <div class="input-group">
                            
                            <textarea name="description"></textarea>
                            
                          </div>
                         
                        </div>
                        <div class=" mb-3">
                          <label  class="form-label">photo</label>
                          <br>
                          <input type="text" name="image"
                           required>  
                          <div class="input-group">
                            
                            
                          </div>
                         
                        </div> 
                        <div class="d-flex justify-content-between">
                            <input type="submit" class="btn btn-outline-primary" value="envoyer" name="envoi">  </input>
  
                        </div>
                        
                        </form> 
                          </div>
                          
                           
                          </div>
                          
                                     
                    
             </div>
            </div>
       
</body>
</html>
