<?php 
    include('connexion.php');
    session_start();
    


$req="SELECT * from article";
$res = mysqli_query($conn,$req);
$results=mysqli_fetch_all($res,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Parcelles</title>
<body>
<header>
    <a href="#" class="logo"><span>P</span>arce<span>L</span><span>L</span>e</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menuu" onclick="toggleMenu();">Parcelle locale</a></li>
    
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
  
        <?php 
                if(isset($_SESSION['email'])){
                    echo ' <a class="btn-reserve  href="expérience/exp.php">Panier</a>'; 
                    echo '<a class="btn-reserve" href="../site web2/logout/logout.php">Déconnexion</a>';
                    }
                else{
                    echo '<a class="btn-reserve" href="../site web2/connecter/connecter.php">connecter</a>'; 
                echo '<a class="btn-reserve" href="../site web2/inscrire/inscrire.html">inscrire</a>';
                }
                 ?>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        
        <h2>''Exploitation Agricole,parcelles a Vendre en Elevage ou Cultures''</h2>
  
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p style="size:12px">Faciliter les transmissions en campagne, donner de la visibilité aux propriétés rurales à vendre, apporter des contacts d’acquéreurs qualifiés aux vendeurs
            Vous pouvez visiter notre site Web et consulter les offres existantes pour pouvoir acheter des terrains partout dans le monde.Pour toute demande de renseignements,
             vous pouvez envoyer un message aux administrateurs et attendre ses messages.
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="./images/111.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<br>
<br>





          
<section >
<div class="menuu" id="menuu">
          <div class="titre">
        <h2 class="titre-texte"><span>P</span>arcelles  <span>L</span>ocales</h2>
       
    </div>
            </div>
            <br>
            <br>
<table class="table">
  <thead class="thead-dark">
    <tr>
        
      <th scope="col"   style="font-size:large">num_par</th>
      <th scope="col">Petite description</th>
      <th scope="col">Localisation</th>
      <th scope="col">Prix</th>
      <th scope="col" style="margin-left:10px;"></th>
    </tr>
  </thead>
  <?php
           $sql="select * from article";
           $res=mysqli_query($conn,$sql);
          
              while($result=mysqli_fetch_array($res)){
          ?>
    <tr>
      <th scope="row"  style="font-size:large"><?php echo $result['num_art'];?></th>
      <td  style="font-size:x-large"><?php echo $result['p_description'];?></td>
      <td  style="font-size:x-large"><?php echo $result['localisation'];?></td>
      <td  style="font-size:x-large"><?php echo $result['prix'];?>DT</td>
      <th style="font-size:large"><a href="../site web2/admin/voirplus.php?num_art=<?=$result['num_art'];?> "style="color:blue;text-decoration:none">Voir plus</a></th>
    
    </tr>
    
    <?php 
       }
       ?>
  </tbody>
</table>
   
   
       </section>
  <br>
   <br>
  

     
 
 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <h4 style="color:white;font-size:large; background-color: hsla(89, 43%, 51%, 0.5);"> Vous pouvez envoyer un message à l'administrateur <br>de la page pour vous renseigner ou envoyer une plainte.</h4>
     </div>
     
     <div class="contactform">

         <h3>Envoyer un message</h3>
         
         <form  method="POST" action="contact/ajoutcontact.php" >
         <div class="inputboite">
             <input type="text" placeholder="Nom" name="nom">
         </div>
         <div class="inputboite">
            <input type="text" placeholder="email" name="email">
         </div>
         <div class="inputboite">
            <textarea placeholder="message" name="message"></textarea>
         </div>
         <div class="inputboite">
             <input type="submit" name="envoyer" value="envoyer">
         </div>
         </form>
     </div>
            
 </section>
 <div class="copyright">
     <p>copyright 2021 <a href="#">adam chouk</a>  Tous droits reservé</p>
 </div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>