<div class="col-md-3 page-sidebar">
    <aside>
        <div class="inner-box">
            <div class="user-panel-sidebar">
                <div class="collapse-box">
                    <h5 class="collapse-title no-border"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu</font></font><a href="#MyClassified" aria-expanded="true" data-bs-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>

                    <div class="panel-collapse collapse show" id="MyClassified">
                        <ul class="acc-list">
                            <li><a class="active" href="{{route('dashboard')}}"><i class="icon-home"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Accueil</font></font></a></li>

                        </ul>
                    </div>
                </div>
                <!-- /.collapse-box  -->
                <div class="collapse-box">
                    <h5 class="collapse-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mes annonces</font></font>



                    </h5>

                    <div class="panel-collapse collapse show" id="MyAds">
                        <ul class="acc-list">
                            <li><a href="{{ url('dashboard/prdouct/forms') }}"><i class="fa fa-plus"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouvelle Annonce</font></font>


                            </a></li>
                            <li><a href="{{ route('product_list') }}"><i class="fa fa-list"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mes annonces</font></font>


                            </a></li>
                            <li><a href="#"><i class="icon-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Annonces favorites</font></font>


                            </a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.collapse-box  -->

                <div class="collapse-box">
                    <h5 class="collapse-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mon Compte </font></font><a href="#TerminateAccount" aria-expanded="true" data-bs-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>

                    <div class="panel-collapse collapse show" id="TerminateAccount">
                        <ul class="acc-list">
                            <li><a href="#"><i class="fas fa-address-book "></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier mon profile </font></font></a></li>
                            <li><a href="#"><i class=" icon-logout"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se Deconnecter</font></font></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.collapse-box  -->
            </div>
        </div>
        <!-- /.inner-box  -->

    </aside>
</div>
