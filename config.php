<?php
    session_start();
    $_SESSION['user']=$_POST['nom'];
    $_SESSION['password']=$_POST['password'];
?>