<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Les informations de l'Appartement</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post" action="ajouterAppartement.php">
                <div class="form-group">
                    <label for="numap">Numero d'Appartement</label>
                    <input type="number" min="1" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Numero d'Appartement" id="numap" name="numero_appartement" required>
                </div>
                <div class="form-group">
                    <label for="superficie">Superficie</label>
                    <select name="superficie" class="form-control"  aria-describedby="emailHelp" id="superficie" required>
                        <option >  </option>
                        <option value="80">80 m²</option>
                        <option value="90">90 m²</option>
                        <option value="100">100 m²</option>
                        <option value="110">110 m²</option>
                        <option value="120">120 m²</option>
                        <option value="130">130 m²</option>
                        <option value="140">140 m²</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter La Ville" id="ville" name="ville" required>
                </div>
                <div class="form-group">
                    <label for="price">prix par jour</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="XXXX DH" id="prix" name="prix" required>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp"  id="description" name="description" required>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary mb-4" id="ajoutercontrat">Ajouter</button>
                <button type="reset" class="btn btn-secondary mb-4" id="refcontrat">Annuler</button>
            </center>
        </form>
        </div>
        </div>
    </div>
</div>
  



<!-- <div class="modal fade" id="monmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Les informations de l'Appartement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="ajouterAppartement.php">
            <div class="form-group">
                <label for="numap">Numero d'Appartement</label>
                <input type="number" min="1" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Numero d'Appartement" id="numap" name="numero_appartement" required>
            </div>
            <div class="form-group">
            <label for="superficie">Superficie</label>
            <select name="superficie" class="form-control"  aria-describedby="emailHelp" id="superficie" required>
                <option >  </option>
                <option value="80">80 m²</option>
                <option value="90">90 m²</option>
                <option value="100">100 m²</option>
                <option value="110">110 m²</option>
                <option value="120">120 m²</option>
                <option value="130">130 m²</option>
                <option value="140">140 m²</option>
            </select>
            </div>
            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter La Ville" id="ville" name="ville" required>
            </div>
            <div class="form-group">
                <label for="price">prix par jour</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="XXXX DH" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp"  id="description" name="description" required>
            </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary" id="ajoutercontrat">Ajouter</button>
                <button type="reset" class="btn btn-warning" id="refcontrat">Annuler</button>

            </center>
            </form>
        </div>
        </div>
    </div>
    </div>  -->
