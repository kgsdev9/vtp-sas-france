@extends('layout.app')


@section('content')

    <label class="theme-switcher theme-switcher-left-right">
        <span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
        <span class="theme-switcher-handle"></span>
    </label>

    <div class="intro" style="background-image: url(femme02.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown">Le Marche Reciproque des Echanges AFRIQUE - EUROPE </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                       Echanger c'est créer un lien reciproque, Alors n'attendez plus pour construire une relation solide entre l'Afrique et L'Europe.

                    </p>
                    <form action="{{ route('search.annonce') }}">


                    <div class="row search-row animated fadeInUp">
                        <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                            <div class="search-col-inner">
                                <i class="icon-location-2 icon-append"></i>
                                <div class="search-col-input">
                                    <input type="text"
                                           class="form-control locinput input-rel searchtag-input has-icon"
                                           placeholder="Nom de produit" name="name" value="">

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col relative">
                            <div class="search-col-inner">
                                <i class="icon-docs icon-append"></i>
                                <div class="search-col-input">
                                    <input type="text" name="ads"
                                           class="form-control has-icon"
                                           placeholder="Catégorie" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block btn-gradient"><i
                                    class="icon-search"></i><strong>Trouver un produit</strong></button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->


    <section class="event-featured section-ev">
        <div class="container">
            <div class="col-12 title-box text-center section-header">
                <h2 class="title"> Comment ca  <a class="ev">Marche ?</a></h2>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                    <div class="card card-event info-overlay featured">
                        <div class="card-body">
                            <h4 class="card-title">
                                <iframe width="100%" height="315"
                                src="{{asset('video/lv_0_20230624183229.mp4')}}">
                                </iframe>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>


            <div style="clear: both"></div>

        </div>
    </section>
    <br><br>
    <div class="main-container" >
        <div class="container">

            <div class="col-xl-12 content-box ">
                <div class="row row-featured row-featured-category">
                    @foreach ($categoryCollection as $value)
                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="{{ route('category.annonce.link', $value->slug) }}">
                            <img src="{{ asset(('categorie/images/'.$value->image)) }}" class="img-responsive"
                                                     alt="img">
                            <h6> {{$value->name}} </h6>
                            <span class="text-dark">Produit disponible <strong>{{ count($value->products) }}</strong>  </span>
                        </a>
                    </div>

                    @endforeach

                </div>


            </div>



            <div class="col-md-12 card card-default  login-box">
                <div class="category-list make-grid">
                    <div class="listing-filter">
                        <div class="pull-left col-xs-6">
                            <div class="breadcrumb-list"><a href="#" class="current"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liste des annonces Recentes </font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                </font><span class="cityName"><font style="vertical-align: inherit;"></font></span></font>
                                <span class="cityName"><font style="vertical-align: inherit;"></font>
                                </span>


                                    </div>
                        </div>
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view "><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large active "></i></span></div>
                        <div style="clear:both"></div>
                    </div>
                    <!--/.listing-filter-->


                    <div class="menu-overly-mask"></div>
                    <!-- Mobile Filter bar End-->

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="category-list-wrapper row no-margin">

                                @foreach ($productCollectionRandom as $value)


                                <div class="item-list">
                                    <div class="row">
                                        <div class="col-md-2 no-padding photobox">
                                            <div class="add-private-tabimage">
                                                <a href="{{ route('detail.ads', $value->slug) }}"><img class="thumbnail no-margin" src="{{ asset('cover/'.$value->cover_image) }}" alt="img"></a>
                                            </div>
                                        </div>
                                        <!--/.photobox-->
                                        <div class="col-md-7 add-desc-box">
                                            <div class="ads-details">
                                                <h5 class="add-title"><a href="ads-details.html">

                                                    {{Str::limit($value->name, 26)}}</a></h5>
                                                <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" data-bs-original-title="Business Ads">B </span>
                                     <span class="date"><i class=" icon-clock"> </i> {{ $value->created_at->diffForHumans()}}</span>- <span class="category"> {{ $value->category->name }} </span>-
                                    <span class="item-location"><i class="fa fa-map-marker-alt"></i> {{ $value->city}} </span>
                                        </span>
                                            </div>
                                        </div>
                                        <!--/.add-desc-box-->
                                        <div class="col-md-3 text-right  price-box">
                                            <h2 class="item-price"> {{ $value->price}} € </h2>
                                            <a class="btn btn-danger  btn-sm make-favorite" href="{{route('detail.ads', $value->slug)}}"> <i class="fa fa-certificate"></i>

                                                <span>Detail</span> </a>
                                            <a class="btn btn-secondary  btn-sm make-favorite" href="javascript:void(0)"> <i class="fa fa-heart"></i>
                                                <span>Envie</span>
                                            </a>
                                        </div>
                                        <!--/.add-desc-box-->
                                    </div>

                                </div>
                                @endforeach



                            </div>
                        </div>


                    </div>
                </div>



            </div>


        </div>
    </div>

    
@endsection
