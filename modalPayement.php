<!-- Modal Payement -->
<div class="modal fade" id="payement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Payement</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="location.php" method="post">
                    <div class="form-group">
                        <label for="numapp">Numero d'appartement: </label>
                        <input type="number" name="id" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="num">Numero de carte: </label>
                        <input type="text" name="numero" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date">Date d'expiration :</label>
                        <select name="mois">
                            <option>mois</option>
                            <option value="janvier">janvier</option>
                            <option value="fevrier">février</option>
                            <option value="mars">mars</option>
                            <option value="avril">avril</option>
                            <option value="mai">mai</option>
                            <option value="juin">juin</option>
                            <option value="juillet">juillet</option>
                            <option value="aout">aout</option>
                            <option value="septembre">septembre</option>
                            <option value="octobre">octobre</option>
                            <option value="novembre">novembre</option>
                            <option value="decembre">decembre</option>
                        </select>   
                        <select name="annee">
                            <option>annee</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="code">Code de verification : </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <center>
                    <button type="reset" class="btn btn-secondary mb-4" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary mb-4" name="submit">Payer</button>
                </center>
            </form>
            
        </div>
    </div>
    </div>
