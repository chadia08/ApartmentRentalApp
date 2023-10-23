<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>inscription</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="login_style.css">
	</head>
<body>
            <div  class="login-box">
                <img src="pics/house.png">
                <h1>Sign Up</h1>
                <form method="POST"  action="ajouterClient.php">
                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Numéro Identité National"name="cin">
                    </div>

                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="nom" placeholder="Nom" >
                    </div>

                    <div class="textbox">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" name="tele" placeholder="Telephone" >
                    </div>

                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="pass" placeholder="Mot de passe" >
                    </div>
                    <input type="submit" value="Sign In" class="button">
                    <p class="text-center" style="color: black;">you already have an account <a href="login.php">Sign in</a></p>
                </form>
            </div> 

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html