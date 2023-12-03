function validateForm(){
    var name = document.forms["RegForm"]["nom"];               
    var email = document.forms["RegForm"]["email"];    
    var  prenom = document.forms["RegForm"]["prenom"];  
    var password=document.getElementById("password").value;
  

 
   

    if(name.value==""){
        alert("svp entrez votre nom !");
        name.focus();
        return false;
    }if(email.value==""){
        alert("svp entrez votre email !");
        email.focus();
        return false;
    }if(email.value.indexOf("@",0)<0){
        alert("Adresse mail invalide !");
        email.focus();
        return false;
    }if(email.value.indexOf(".",0)<0){
        alert("Adresse mail invalide !");
        email.focus();
        return false;

    
    }
    if(prenom.value==""){
        alert("entrez votre prenom!");
        prenom.focus();
        return false;

    }
    if(password==""){
        alert("entrez votre password!");
        password.focus();
        return false;

    }
    if(password.length<8){
        alert("SVP le nombre de caractères doit depasser  le 8 caractére");
        return false;
}
    else{
        return true;
    } 
}