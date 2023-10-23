<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>reservation</title>
</head>
<style>
    .small{
        width: 100px;
        height: 100px;
        margin: 15px;
    }
    .images{
        width:180px;
    }
    .pic{
        width: 580px;
        height:490px;
        margin-top:15px;
    }
    .informations{
        margin-top:15px;
        margin-left: 60px;
    }
    span{
        font-weight: bold;
        font-size: 18pt;
        color:gray;
    }
</style>
<body>
    <?php session_start(); ?>
    <?php  include_once("navbar.php");      ?>
    <div id="details">

    </div>
    <?php include_once("modalPayement.php"); ?>
    
    
    <script>
    <?php
        $id = $_GET['id'];
        include_once("connexion.php");
        $req = "select * from appartement where id_appart=$id";
        $result = mysqli_query($con,$req);
        $app = mysqli_fetch_assoc($result); 
        $req2 = "select * from image where id_appart =$id";
        $res = mysqli_query($con,$req2);
        $i=0;
        $img=array();
        while($ligne = mysqli_fetch_assoc($res)){
            $img[$i]=$ligne;
            $i++;
        }
        
    ?>
    
        let app=<?php echo json_encode($app);  ?>;
        console.log(app);
        let img=<?php echo json_encode($img);  ?>;
        console.log(img);
        const row = document.getElementById('details')
        row.innerHTML= `
        <div class="card m-5">
            <div class="card-header text-center">Appartement Numero ${app.id_appart} </div>
            <div class="card-body d-flex">
                <div>
                    <img src=${img[0].url}  class="pic" id="image" alt="image"/> 
                </div>
                <div class="images">
                    <img src=${img[0].url}  id="0" class="small" alt="image" onclick="f()"/>
                    <img src=${img[1].url}  id="1" class="small" alt="image" onclick="f()"/>
                    <img src=${img[1].url}  class="small" alt="image" onclick="f()"/>
                    <img src=${img[1].url}  class="small" alt="image" onclick="f()"/>
                </div>
                <div class="informations">
                    <p><span>N°appartement :</span>  ${app.id_appart}</p> 
                    <p><span>Ville :</span> ${app.ville}</p> 
                    <p><span>Superficie :</span> ${app.superficie}  m²</p>
                    <p><span>Etat :</span> ${app.etat}  </p>
                    <p><span>Description :</span> ${app.label}</p>
                    <b style="font-size: 25pt;"> ${app.prix_jour},00DH</b>
                    <br>
                    <br>
                    <!-- Button trigger modal -->
                    <a type="button" href="#" class="btn btn-primary w-50" data-bs-toggle="modal" data-bs-target="#payement">Reserver</a>
                    <i class=" fa fa-heart ms-3" style="color: rgb(255, 50, 50); font-size:20pt;"></i>
                </div>
            </div>
        </div> `
    
        function f(){
        var temp = document.getElementById('image');
        temp.src=`${img[1].url}`;
    }
</script>
    <?php  include_once("footer.html");      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>