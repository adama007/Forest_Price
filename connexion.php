<?php
$servername="Localhost";
$username="root";
$password="";
$data="parcelle"; 

$conn=mysqli_connect($servername,$username,$password,$data); 

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}


?>