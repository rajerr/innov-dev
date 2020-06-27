
<div class="row">
    <div class="col-lg-6 col-xlg-6 col-xs-9 col-sm-9 col-md-9 content bg-light float-right mx-auto d-block mt-2 border border-info">
        <h4 class="col-12 text-secondary section-heading text-center border border-secondary mt-2"> AJOUTER CHAMBRE</h4>
        <form action="<?=BASE_URL?>/chambre/ajouter" method="post" class="text-secondary" id="saveChambre">
        <div class="form-group">
                <label for="num_chambre">numero</label>
                <input type="text" class="form-control" readonly="readonly" id="num_chambre" name="num_chambre" placeholder="exemple 001-2451" value="<?= $_POST['num_batiment']."-".rand(0,9999)?>">
            </div>
            <div class="form-group mt-2">
                <label class=" mt-2 " for="type">Type chambre</label>
                <select class="form-control" id="type" name="type">
                <option></option>
                <option>Individuelle</option>
                <option>deux</option>
                </select>
                <span class="text-danger"><?=@$error['type']?></span>
            </div>
            <div class="form-group mt-2">
                <label class=" mt-2" for="type">Choisir numero batiment</label>
                <select class="form-control" id="num_batiment" name="num_batiment" >
                <option></option>
                <option>001</option>
                <option>002</option>
                <option>003</option>
                <option>004</option>
                <option>005</option>
                </select>
                <span class="text-danger"><?=@$error['num_batiment']?></span>
            </div>
            <div class="form-group mx-auto d-block text-center">
            <button type="submit" id="enregistrer" class="btn btn-secondary col-9 mt-3" btn-lg btn-block>Enregistrer</button>
            </div>
            <span class="text-danger"><?=@$error?></span>
        </form>
    </div>
</div>



