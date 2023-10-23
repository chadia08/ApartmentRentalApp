<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <?php include_once("navbar.php"); ?>
    <?php include_once("zoneSearch.php"); ?>
    <div class="d-flex flex-wrap justify-content-around">
        <?php 
         if( isset($_POST['ville']) && $_POST['ville']!='default' ):
            $ville = $_POST['ville'];
            $min = $_POST['min'];
            $max = $_POST['max'];
            include_once("connexion.php");
            $req = "select * from appartement where ville='".$ville."' and prix_jour between $min and $max";
            $result = mysqli_query($con,$req);
            while($row = mysqli_fetch_assoc($result)):?>
            <?php
                $id = $row['id_appart'];
                $req2 = "select url from image where id_appart = $id ";
                $res = mysqli_query($con,$req2);
                $ligne = mysqli_fetch_assoc($res);
                $img = $ligne['url'];
                $newtab = array($row['id_appart'],$row['ville'],$row['superficie'],$row['etat'],$row['prix_jour'] ,$img);
            ?>
            <div class="card m-5">
                    <div class="card-header d-flex">
                        <h4 class="appNum w-75 mt-3"> Appartement N° <?= $row['id_appart'] ?></h4>
                        <?php echo "<a class='btn m-2' href='SuppAppartement.php?id=".$id."'><i class='fa fa-trash ms-2' style='color: red; font-size:20pt;'></i></a>"; ?>
                    </div>
                    <div class="card-body">
                        <img src=<?="$img"; ?>  class="pic w-100"alt="image"/>  
                        <p>N°appartement:  <?= $id ?></p> 
                        <p>Ville: <?= $row['ville'] ?></p> 
                        <p>Superficie : <?= $row['superficie'] ?>  m²</p>
                        <p>Etat : <?= $row['etat'] ?>  </p>
                        <p>Prix/jour: <?= $row['prix_jour'] ?>  DH</p>
                    </div>
                    <?php
                      echo "<a class='btn btn-color' style ='background-color:#6C63FF; color: white; font-size:16pt;' href='reserver.php?id=".$id."'  role='button'>plus d'information</a>";
                    ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
    

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>    
<script>
    <?php if(isset($_GET['alert']) && isset($_GET['msg'])): ?>
          Swal.fire({
            position: 'center',
            icon: "<?php echo $_GET['alert']; ?>",
            title: "<?php echo $_GET['msg']; ?>",
            showConfirmButton: false,
            timer: 3000
          })
        <?php endif; ?>   
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php  include_once("footer.html");      ?>
</body>
</html>