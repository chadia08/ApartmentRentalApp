<br>
<h1 class="text-center" style="color: #6C63FF; font-family: lucida;">les appartements disponibles chez nous</h1>
    <div class="d-flex flex-wrap justify-content-around">
        <?php 
            include_once("connexion.php");
            $req = "select * from appartement";
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
    </div>