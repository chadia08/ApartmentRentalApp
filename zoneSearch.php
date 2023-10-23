<div class="header">
        <h1>LocApp en copropriété</h1>
        <h5>Nous avons trouvé 773 appartement(s) – saisissez vos dates pour voir les disponibilités</h5>
        <form class="d-flex container forme" action="searchAppartement.php" method="post">
            <input type="number" placeholder="prix min" class="form-control me-2" name="min">
            <input type="number" placeholder="prix max" class="form-control me-2" name="max">
            <select class="form-select me-2" name="ville">
                <option selected value='default'>à quelle ville</option>
                <option value="marrakech">Marrakech</option>
                <option value="casablanca">Casablanca</option>
                <option value="rabat">Rabat</option>
                <option value="tanger">Tanger</option>
                <option value="agadir">Agadir</option>
            </select>
            <button class="me-2 bsearch" style="background-color: #6C63FF; color: white; font-size:15pt;" type="submit"><i class="fa fa-search"></i></button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-2 btn" style="background-color: #6C63FF; color: white;   height: 60px;"><i class="fa fa-plus m-1"></i>Nouveau appartement</button>
          </form>
        </br>
        <?php include_once("modalAjouterAppartement.php");?>
</div>