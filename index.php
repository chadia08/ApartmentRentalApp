<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>acceuil</title>
</head>
<body>
    <?php  include_once("navbar.php");      ?>

    
    <div class="d-flex justify-content-around">
        <div class="w-50 ">
            <img src="pics/house.png" class="w-100 mt-3">
        </div>
        <div class="w-50 p-5">
            <h2 class="text-home">trouvez l'appartement de vos rêves!</h2>
            <h4 class="text-home">Votre future logement est ici. Nous vous aidons à trouver un appartement à louer au Maroc sur LocApp</h4>
            <br>
            <br>
            <a href="login.php" class="btn border-color px-5 ms-5" style="color: #6C63FF; border-color: #6C63FF;">Login</a>
            <a href="signup.php" class="btn border-color  px-5 ms-5" style="color: #6C63FF; border-color: #6C63FF;">Sign Up</a>
        </div>
    </div>
    
    <?php  include_once("footer.html");      ?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
