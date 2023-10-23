<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title>Document</title>
</head>
<body>


<style>
.alert {
  background-color: #ffa619;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>



<?php

if(!empty($_POST['numero_appartement'])  && !empty($_POST['superficie']) && !empty($_POST['ville']) && !empty($_POST['prix']) && !empty($_POST['description']))
{
    $num_app = $_POST['numero_appartement'];
    $superficie = $_POST['superficie'];
    $ville = $_POST['ville'];
    $prix = $_POST['prix'];
    $desc = $_POST['description'];

    $vals = "($num_app, $superficie,'$ville',$prix,'$desc')";
    $requet = "INSERT INTO appartement(id_appart, superficie, ville, prix_jour, label) VALUES $vals";
    
  
    include_once("connexion.php");
    if(mysqli_query($con, $requet)){
        header("Location: home.php?alert=success&msg=Vous avez ajouter un appartement avec Succès !");
        exit();
    }
     else{
    // redirect to prev page with param (alert)
    header("Location: home.php?alert=error&msg=erreur de la requet!");
    exit();
    }
    
  }
else{
  header("Location: home.php?alert=error&msg=OOps ... Veuillez Remplir tout les champs.");
  exit();
}

?>
</body>
</html>
