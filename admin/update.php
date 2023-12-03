<?php
session_start();
if(!$_SESSION['pass']){
    header('location:connexion.php');
}
include("../connexion.php");
if(isset($_GET['id']) AND !empty($_GET['id'])){
$getid=$_GET['id'];
echo$getid;




     


     $search="Select * from utilisateurs where id like '$getid' "; 

    $result=mysqli_query($conn,$search);

    if($result){
        while($row=mysqli_fetch_array($result)){
            $nom=$row['nom'];
            $prenom=$row['prenom'];
            $email=$row['email'];
            $password=$row['pass1'];
           
        }
    }else{
        echo "no data found for this id";
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mise a jour des profils</title>
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
    <form method="POST" action="update.php" class="form" >
        <h2>update</h2>
        <label>Id</label>
            <input type="text" name="id" value="<?php echo $getid;?>" placeholder=" ">
            <br><br>
            <label>nom</label>
            <input type="text" name="nom" value="<?php echo $nom;?>" placeholder=" ">
            
            <br><br>
            <label> Prénom</label>
            <input type="text" name="prenom" value="<?php echo $prenom;?>"  placeholder=" "><br><br>
            <label>email</label>
            
            <input type="text" name="email" value=<?php echo $email;?> ><br><br>
            <label>mot de passe</label>
            <input type="text" name="pass1" value="<?php echo $password;?>" placeholder=" "><br><br> 
            <input type="submit" name="Modifier" value="Modifier">

            <!-- php echo($gen=="Femme")? 'selected':''; en cas de liste déroulante--> 

    </form>
</body>
</html>
<?php
    if(isset($_POST['Modifier'])){
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom']; //=form
        $email=$_POST['email'];
        $password=$_POST['pass1'];
    
        $sql="update utilisateurs set nom='$nom', prenom='$prenom',  email='$email', pass1='$password' where id like '$id' ";

        if($conn->query($sql)){
            echo "modification avec succés";
            header('location:utilisateurs.php');
        }else{
            echo "error".$conn->error;
        }$conn->close();
    }
?>