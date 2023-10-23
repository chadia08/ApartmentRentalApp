<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>accéder à mon compte</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   <link rel="stylesheet" href="login_style.css">
	</head>
<body>
            <div  class="login-box">
                <img src="pics/house.png">
                <h1>LOGIN</h1>
                <form method="POST"  action="#">
                    <div class="textbox ">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Nom d'Utilisateur"name="adminname">
                    </div>

                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="password" placeholder="password" >
                    </div><br>
					<?php 
						if(isset($_GET['msg'])) echo "<span class='alert alert-danger  w-100'>".$_GET['msg']."</span> <br><br>";
					?>
                    <input type="submit" value="Sign In" class="button">
                    <p class="text-center" style="color: black;">you don't have an account <a href="signup.php">sign up</a></p>
                </form>
            </div> 

			<?php
			$error= 'Les Données sont incorrectes !!!!';
				if($_SERVER['REQUEST_METHOD']=='POST'){
					if(isset($_POST['adminname']) && isset($_POST['password'])){
						$name = $_POST['adminname'];
						$password = $_POST['password'];
						include_once('connexion.php');
						$query = "select nom, password from client where nom = '$name' and password='$password'";
						$result = mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0) {
							session_start();
    						$_SESSION['user']=$_POST['adminname'];
    						$_SESSION['password']=$_POST['password'];
							header('location: appartements.php');
						}else{
							header("location: login.php?msg= $error");
						}
					}else{
						header("location: login.php?msg= $error");
					}
				}
			?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html