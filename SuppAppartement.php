<?php
include "connexion.php";
$n = $_GET['id'];
$request = mysqli_query($con,"DELETE FROM appartement WHERE id_appart= $n");

if($request){
        header("Location: home.php?alert=success&msg=suppression d'un apprtement!");
        exit();
}else{
        header("Location: home.php?alert=error&msg=erreur de suppression!");
        exit();
}
?>