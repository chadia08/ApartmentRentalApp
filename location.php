<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            include_once("connexion.php");
            $query = "update appartement set etat='louée' where id_appart='$id'";
            $result=mysqli_query($con,$query);
            $query1 = "select cni_client from client where nom='".$_SESSION['user']."'";
            $result1 = mysqli_query($con,$query1);
            while($tab1 = mysqli_fetch_assoc($result1)){  $cni = $tab1['cni_client'];   }
            $query2 = "insert into location(cni_client,id_appart) values('$cni',$id)";
            $result2 = mysqli_query($con,$query2);
            echo "location effectue "; 
        }
    ?>
</body>
</html>