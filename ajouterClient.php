<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['cin']) && isset($_POST['nom']) && isset($_POST['tele']) && isset($_POST['pass'])){
            $cin=$_POST['cin'];
            $nom=$_POST['nom'];
            $tele=$_POST['tele'];
            $pass=$_POST['pass'];
            include_once("connexion.php");
            $req = "insert into client values('".$cin."','".$nom."','".$tele."','".$pass."')";
            $result = mysqli_query($con,$req);
            if($result){
                echo "query ok";
            }else echo "query not ok";
        }else{
            header("location: signup.php");
        }
    }
?>