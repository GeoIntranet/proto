<div class="container-fluid" style="padding: 30px">
    <div class="row">
        <div class="col-md-12">
            <form action="/ask" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" class="form-control" id="inputEmail3" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Prenom</label>
                    <div class="col-sm-10">
                        <input name="prenom" type="text" class="form-control" id="inputPassword3" placeholder="Prenom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Societer</label>
                    <div class="col-sm-10">
                        <input name="societer" type="text" class="form-control" id="inputPassword3" placeholder="Societer">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <textarea name="demande" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Envoyé</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>