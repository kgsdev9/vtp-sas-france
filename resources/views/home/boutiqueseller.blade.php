@extends('layout.app')

@section('content')

<div class="main-container inner-page">
    <div class="container">
        <div class="section-content">
            <div class="inner-box ">
                <div class="row">


                    <div class="col-sm-6">
                        <div class="seller-info seller-profile">
                            <div class="row">
                                <div class="col-md-3">
                                    {{-- <div class="seller-profile-img">

                                        @if($ressource['photo'] =! null )
                                        <a><img src="{{asset('seller/images/photo/'.$ressource['photo'])}}" class="img-responsive thumbnail" alt="image"> </a>
                                         @else
                                         <a><img src="{{asset('seller/images/logo/'.$ressource['logo'])}}" class="img-responsive thumbnail" alt="image"> </a>
                                         @endif
                                    </div> --}}
                                </div>
                                    <div class="col-md-9">
                                        <h3 class="no-margin no-padding link-color uppercase "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource['fullname']}}</font></font></h3>

                                        <div class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                           {{$ressource['inscription']->diffForHumans()}}
                                        </font></font></div>
                                      
                                        <div class="seller-social-list">

                                            <ul class="share-this-post">



                                                {!! $ressourceVendeur !!}


                                            </ul>
                                        </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-sm-6">

                        <div class="seller-contact-info">

                            <h3 class="no-margin uppercase color-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Coordonnées</font></font></h3>

                            <dl class="dl-horizontal">

                                <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse:</font></font></dt>
                                <dd class="contact-sensitive"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        {{$ressource['adresse']}}

                                 </dd>
                                <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphone:</font></font></dt>
                                <dd class="contact-sensitive"><font style="vertical-align: inherit;">
                                    {{$ressource['telephone']}}

                                </dd>

                                <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ville :</font></font></dt>
                                <dd class="contact-sensitive"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource['city']}}</font></font></dd>

                                <dt><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pays:</font></font></dt>
                                <dd class="contact-sensitive"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$ressource['country']}}</font></font></dd>
                            </dl>


                        </div>

                    </div>
                </div>

            </div>

            <div class="section-block">
                <div class="row">
                    <div class="col-sm-9 col-thin-left page-content ">

                        <div class="category-list make-gird make-grid">
                            <div class="tab-box ">


                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs add-tabs" role="tablist">
                                    <li class="active nav-item"><a href="#allAds" role="tab" data-bs-toggle="tab" class="nav-link text-dark">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Bienvenue sur ma boutique</font></font>


                                                </a>
                                    </li>
                                </ul>
                                <div class="tab-filter">
                                    <select title="Trier par" class="selectpicker select-sort-by" data-style="btn-select" data-width="auto" style="display: none;">
                                        <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trier par</font></font></option>
                                        <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix ​​croissant</font></font></option>
                                        <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix ​​: du plus élevé au plus bas</font></font></option>
                                    </select><div class="nice-select selectpicker select-sort-by" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trier par</font></font></span><ul class="list"><li data-value="Sort by" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trier par</font></font></li><li data-value="Price: Low to High" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix ​​croissant</font></font></li><li data-value="Price: High to Low" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix ​​: du plus élevé au plus bas</font></font></li></ul></div>
                                </div>


                            </div>
                            <!--/.tab-box-->

                            <div class="listing-filter">
                                <div class="pull-left col-xs-6">
                                    <div class="breadcrumb-list"><a href="#" class="current">
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annonce du vendeur</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font>


                                    </div>
                                </div>
                                <div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span></div>
                                <div style="clear:both"></div>
                            </div>
                            <!--/.listing-filter-->

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="category-list-wrapper row no-margin">

                                       @foreach ($boutiqueSeller as $value)

                                        <div class="item-list">
                                            <div class="row">
                                                <div class="col-md-2 no-padding photobox">
                                                    <div class="add-private-tabimage">



                                                        <a href="{{route('detail.ads', $value->slug)}}"><img class="thumbnail no-margin" src="{{ asset('cover/'.$value->cover_image) }}" alt="image"></a>
                                                    </div>
                                                </div>
                                                <!--/.photobox-->
                                                <div class="col-md-7 add-desc-box">
                                                    <div class="ads-details">
                                                        <h5 class="add-title"><a href="ads-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                           {{Str::limit($value->name, 30) }}</font></font></a></h5>
                                                                <span class="info-row">
                                                                <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" data-bs-original-title="Business Ads"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B</font></font></span>
                                                             <span class="date"><i class=" icon-clock"> </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->created_at->diffForHumans()}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - </font></font><span class="category">
                                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->category->name}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> -
                                                  </font></font><span class="item-location"><i class="fa fa-map-marker-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->country}}</font></font></span>
                                                </span>
                                                    </div>
                                                </div>
                                                <!--/.add-desc-box-->
                                                <div class="col-md-3 text-right  price-box">
                                                    <h2 class="item-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->price}} €</font></font></h2>
                                                    <a class="btn btn-danger  btn-sm make-favorite" href="{{route('detail.ads', $value->slug)}}"> <i class="fa fa-eye"></i>

                                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Detail</font></font></span> </a>
                                                    <a class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>
                                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sauvegarder</font></font></span>
                                                    </a>
                                                </div>
                                                <!--/.add-desc-box-->
                                            </div>

                                        </div>
                                        @endforeach
                                        <!--/.item-list-->


                                        <!--/.item-list-->
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="pagination-bar text-center">
                            <nav aria-label="Navigation dans les pages" class="d-inline-b">
                                <ul class="pagination">

                                    {{ $boutiqueSeller->links() }}

                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--/.pagination-bar -->


                    </div>


                    <div class="col-md-3  page-sidebar-right">
                        <aside>

                            <div class="card sidebar-card">
                                <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conseils de sécurité pour les acheteurs</font></font></div>
                                <div class="card-content">
                                    <div class="card-body text-left">
                                        <ul class="list-check">
                                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Discuter avec le vendeur pour en savoir plus sur le produit </font></font></li>
                                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vérifiez l'article avant d'acheter</font></font></li>
                                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ne payez que via la plateforme VTP MARKET </font></font></li>
                                        </ul>
                                        {{-- <p><a class="pull-right" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Savoir plus</font></font><i class="fa fa-angle-double-right"></i> </a></p> --}}
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

    </div>
</div>
@endsection
