 @extends('layout.app')

 @section('content')

 <div class="main-container">
    <div class="container">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 page-content col-thin-right">
                <div class="inner inner-box ads-details-wrapper">
                    <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$ressource->name}}
                         </font></font>


                    </h2>
                    <span class="info-row"> <span class="date"><i class=" icon-clock"> </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->created_at->diffForHumans()}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - </font></font><span class="category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->category->name}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> -</font></font><span class="item-location"><i class="fa fa-map-marker-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->country}} </font></font></span> </span>
                    <div class="item-slider">
                        <h1 class="pricetag">{{$ressource->price}} €</h1>
                        <div class="bx-wrapper" style="max-width: 100%;">
                            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 370.922px;">
                            <ul class="bxslider" style="width: 3215%; position: relative; transition-duration: 0s; transform: translate3d(-658px, 0px, 0px);">
                            <li style="float: left; list-style: none; position: relative; width: 658px;" aria-hidden="false"><img src="{{asset('images/'.$ressource->img_two)}}" alt="img"></li>
                            <li aria-hidden="true" style="float: left; list-style: none; position: relative; width: 658px;" aria-hidden="true"><img src="{{asset('images/'.$ressource->img_three)}}" alt="img"></li>
                            <li style="float: left; list-style: none; position: relative; width: 658px;" aria-hidden="true"><img src="{{asset('images/'.$ressource->img_for)}}" alt="img"></li>

                    </ul></div>
                    <div class="bx-controls bx-has-controls-direction">
                        <div class="bx-controls-direction"></div></div>
                    </div>
                        <div id="bx-pager">
                            <a class="thumb-item-link active" data-slide-index="0" href="#"><img src="{{asset('images/'.$ressource->img_two)}}" alt="img"></a>
                            <a class="thumb-item-link" data-slide-index="1" href="#"><img src="{{asset('images/'.$ressource->img_three)}}" alt="img"></a>
                            <a class="thumb-item-link" data-slide-index="2" href="#"><img src="{{asset('images/'.$ressource->img_for)}}" alt="img"></a>
                        </div>
                    </div>
                    <!--item-slider-->

                    <div class="Ads-Details">
                        <h5 class="list-title"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Détails des annonces</font></font></strong></h5>

                        <div class="row">
                            <div class="ads-details-info col-md-8">
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->description}}.</font></font></p>

                            </div>
                            <div class="col-md-4">
                                <aside class="panel panel-body panel-details">
                                    <ul>
                                        <li>
                                            <p class=" no-margin "><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix ​​:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->price}} € </font></font></p>
                                        </li>
                                        {{-- <li>
                                            <p class="no-margin"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type&nbsp;:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Mobiles mobiles, À vendre</font></font></p>
                                        </li> --}}
                                        {{-- <li>
                                            <p class="no-margin"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lieu :</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> New-York</font></font></p>
                                        </li> --}}
                                        {{-- <li>
                                            <p class=" no-margin "><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etat :</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Neuf</font></font></p>
                                        </li> --}}
                                        {{-- <li>
                                            <p class="no-margin"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Marque :</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Sony</font></font></p>
                                        </li> --}}
                                    </ul>
                                </aside>
                                <div class="ads-action">
                                    <ul class="list-border">
                                        <li><a href="{{route('boutique.annonceurs', $ressource->seller->slug)}}"> <i class=" fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Plus d'annonces par utilisateur</font></font></a></li>
                                        <li><a href="#"> <i class=" fa fa-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enregistrer l'annonce</font></font></a></li>
                                        <li><a href="#"> <i class="fa fa-share-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Partager l'annonce</font></font></a></li>
                                        <li><a data-bs-target="#reportAdvertiser" data-bs-toggle="modal"> <i class="fa icon-info-circled-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Signaler un abus</font></font></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer text-left">


                            <button type="button" class="btn  btn-default" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class=" icon-mail-2"></i><font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Envoyer un message</font></font>
                            </button>




                        </div>
                    </div>
                </div>
                <!--/.ads-details-wrapper-->

            </div>
            <!--/.page-content-->

            <div class="col-md-3  page-sidebar-right">
                <aside>

                    <div class="card card-user-info sidebar-card">
                        <div class="block-cell user">

                            <div class="cell-media">
                                @if($ressource->seller->photo != null)
                                <img src="{{asset('seller/images/logo/'.$ressource->seller->logo)}}" alt="">
                                @else
                                <img src="{{asset('seller/images/photo/'.$ressource->seller->photo)}}" alt="">
                                @endif
                            </div>
                            <div class="cell-content">
                                <h5 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">posté par</font></font></h5>
                                <span class="name"><a href="seller-profile.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$ressource->seller->fullname}}</font></font></a></span>
                                <span class="rating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->seller->adresse}}</font></font></span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-left">
                                <div class="grid-col">
                                    <div class="col from">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emplacement</font></font></span>
                                    </div>
                                    <div class="col to">
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->seller->country}}</font></font></span>
                                    </div>
                                </div>

                                <div class="grid-col">
                                    <div class="col from">
                                        <i class="fas fa-user"></i>
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rejoint</font></font></span>
                                    </div>
                                    <div class="col to">
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource->seller->created_at}}</font></font></span>
                                    </div>
                                </div>


                            {{-- {{ $ressource->seller->email }}  --}}
                            </div>

                            <div class="ev-action">
                                <i class="fa fa-whatsapp" style="font-size:24px"></i>

                                <a class="btn btn-success btn-block"   href="https://web.whatsapp.com/send?phone={{$ressource->seller->phonenumber}}&amp;text=Votre%20annonce%20publi%C3%A9e%20sur%20VTPAMarket%20m%27int%C3%A9resse.%20{{$urlcurrent}}">

                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> <i class="fa fa-whatsapp"></i>Contacter Via WhatsApp
                                <a class="btn  btn-info btn-block"  href="tel:{{$ressource->seller->phonenumber}}">
                                    <i class=" icon-phone-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Appeler</font></font></a>
                                    <a class="btn  btn-primary btn-block"  href="{{route('processing.payment', $ressource->slug)}}">
                                        <i class="far fa-credit-card"></i> <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acheter l'article </font></font></a>
                            </div>

                        </div>
                    </div>

                    <div class="card sidebar-card">
                        <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conseils de sécurité pour les acheteurs</font></font></div>
                        <div class="card-content">
                            <div class="card-body text-left">
                                <ul class="list-check">
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Discuter Avec le vendeur pour en savoir plus sur son  produit </font></font></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vérifiez l'article avant d'acheter</font></font></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ne payez directement Sur la plateforme VTP , Vous Serez remboursé en cas de litige </font></font></li>
                                </ul>

                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.categories-list-->
                </aside>
            </div>
            <!--/.page-side-bar-->
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class=" icon-mail-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contacter l'annonceur </font></font></h4>

                    <button type="button" class="close modal-close" data-bs-dismiss="modal"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fermer</font></font></span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('contact.seller') }}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom:</font></font></label>
                            <input class="form-control required" name="name" id="recipient-name" placeholder="Votre nom" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text" value="stephane">
                        </div>
                        <input type="hidden" name="seller_email" value="{{ $ressource->seller->email }}">

                        <div class="form-group">
                            <label for="sender-email" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail:</font></font></label>
                            <input id="sender-email" type="text" data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" name="email" data-placement="top" placeholder="email@vous.com" class="form-control email" value="exemple@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="recipient-Phone-Number" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro de téléphone:</font></font></label>
                            <input type="text" maxlength="60"  class="form-control" name="telephone" id="recipient-Phone-Number" value="0768365866">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Message </font></font><span class="text-count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(300)</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;:</font></font></label>
                            <textarea class="form-control" id="message-text" placeholder="Votre message ici.." data-placement="top" data-trigger="manual" name="message"> stephane guy est la </textarea>
                        </div>
                        <div class="form-group">
                            <p class="help-block pull-left text-danger hide" id="form-error"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp; Le formulaire n'est pas valide.</font></font></p>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler</font></font></button>
                            <button type="submit" class="btn btn-success pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envoyer le message!</font></font></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
  </div>


 @endsection
