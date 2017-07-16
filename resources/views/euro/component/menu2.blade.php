


<div class="container-fluid menu">
    <div class="row ">
        <div class="item visible-lg col-lg-1  "></div>

        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 ">
            <div class="col wrapper-logo">
                <img class="" src="imgs/euro_.png" alt="logo eurocomputer">
            </div>
        </div>

        <div class="col-lg-8 col-md-9  col-sm-12 col-xs-12   text-right">
            <div class="row menu-item text-center">

                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-2 col-lg-1 first">
                    <a href="">
                        <div class="row"><div class="col"><img src="imgs/internet.png" alt=""></div></div>
                        <div class="row">SOCIETE</div>
                    </a>

                </div>

                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <div class="row"><div class="col"><img src="imgs/scanning.png" alt=""></div></div>
                        <div class="row">TRACABILITE</div>
                    </a>

                </div>

                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <div class="row"><div class="col"><img src="imgs/printer_.png" alt=""></div></div>
                        <div class="row">IMPRIMANTES</div>
                    </a>

                </div>

                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <div class="row">
                            <div class="col"><img src="imgs/networking.png" alt=""></div>
                        </div>
                        <div class="row">MICRO</div>
                    </a>

                </div>
                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-3 col-lg-3">
                    <a href="">
                        <div class="row"><div class="col"><img src="imgs/repair.png" alt=""></div></div>
                        <div class="row"> REPARATION & SERVICES</div>
                    </a>


                </div>
                <div class="item  visible-sm visible-md visible-lg  col-sm-2 col-md-2 col-lg-2">
                    <a href="">
                        <div class="row"><div class="col"><img src="imgs/deal.png" alt=""></div></div>
                        <div class="row">MARQUES</div>
                    </a>

                </div>

            </div>
        </div>

        <div class="item visible-lg col-lg-1  "></div>
    </div>
    <div class="row">
        <div class="item visible-lg col-lg-1  "></div>
        <div class="col-lg-3 text-center wrapper-logo ">
            <b style="padding-top: 10px;" class="text-logo">Eurocomputer</b>
        </div>
        <div class="col-lg-7 text-right wrapper-logo  b text-euro" style="padding-top: 7px ">
            @if($user['nom'])
                <b>Bonjour <b class="emp">{{strtoupper($user['nom'])}} {{ucfirst($user['prenom'])}}</b></b>
            @endif
        </div>
        <div class="item visible-lg col-lg-1  "></div>
    </div>
</div>