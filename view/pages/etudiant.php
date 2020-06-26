<div class="row" id="etudiant">
    <div class="col-lg-12 col-xlg-12 col-md-12 col-sm-12 col-xs-12 content1 bg-light  mx-auto d-block mt-2 border border-info">    
        <h4 class="col-12 text-secondary section-heading text-center border border-secondary mt-2"> LISTER ETUDIANTS</h4>
        <div class="row">
          <div class="col-9">
            <a name="rechercher" id="rechercher" class="btn btn-secondary col-lg-2 col-xlg-2 col-md-2 col-sm-3 col-xs-3 float-left text-decoration-none ml-3 mr-1 mb-3" href="#" role="button">Rechercher</a>
            <input type="text" class="form-control col-lg-2 float-left mr-1 " name="recherche" id="recherche" placeholder="par matricule">
            <input type="text" class="form-control col-lg-2 float-left mr-1 " name="recherche" id="recherche" placeholder="par batimment">
            <div class="col-lg-2 float-left">
                <select class="form-control" id="type" class="type">
                <option>par type</option>
                <option>Loger</option>
                <option>Non Loger</option>
                <option>Boursier</option>
                <option>Non Boursier</option>
                </select>
            </div>          </div>
          <div class="col-3">
              <a name="nouveau" id="nouveau" class=" btn btn-secondary col-lg-6 col-xlg-6 col-md-7 col-sm-9 col-xs-3 text-decoration-none" href="<?=BASE_URL?>/etudiant/ajouter" role="button">Nouveau</a>
          </div>
        </div>
        <form action="" method="get" class=" mx-auto d-block">
          <table class="table bg-light">
            <thead>
              <tr>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Chambre</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2020RARY0001</td>
                <td>Rangba OUEDANE</td>
                <td>Gerry Oreste</td>
                <td>0010004</td>
                <td>
                  <button class="border border-light" type="button"><a href="<?=BASE_URL?>/etudiant/info"><img src="../public/img/icone/ico-vu.png" alt=""></a></button>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-upd.png" alt=""></button>
                </td>
              </tr>
              <tr>
                <td>2020VAYE0001</td>
                <td>VAr</td>
                <td>Elimane YAYA</td>
                <td>0010003</td>
                <td>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-vu.png" alt=""></button>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-upd.png" alt=""></button>
                </td>
              </tr>
              <tr>
                <td>2020RARY0001</td>
                <td>Rangba OUEDANE</td>
                <td>Gerry Oreste</td>
                <td>0010004</td>
                <td>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-vu.png" alt=""></button>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-upd.png" alt=""></button>
                </td>
              </tr>
              <tr>
                <td>2020VAYE0001</td>
                <td>VAr</td>
                <td>Elimane YAYA</td>
                <td>0010003</td>
                <td>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-vu.png" alt=""></button>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-upd.png" alt=""></button>
                </td>
              </tr>
              <tr>
                <td>2020RARY0001</td>
                <td>Rangba OUEDANE</td>
                <td>Gerry Oreste</td>
                <td>0010004</td>
                <td>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-vu.png" alt=""></button>
                  <button class="border border-light" type="button"><img src="../public/img/icone/ico-upd.png" alt=""></button>
                </td>
              </tr>
            </tbody>
          </table>
            <div class="form-group mx-auto d-block ">
            <a name="suivant" id="suivant" class="btn btn-secondary col-lg-1 col-xlg-1 col-md-2 col-sm-3 col-xs-3 float-left text-decoration-none mt-3" href="#" role="button">precedent</a>
                <a name="suivant" id="suivant" class="btn btn-secondary col-lg-1 col-xlg-1 col-md-2 col-sm-3 col-xs-3 float-right text-decoration-none mt-3" href="#" role="button">suivant</a>
            </div>
        </form>
    </div>
</div>
      