@extends('layout.app')

@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
            <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
            <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                <aside>
                    <div class="sidebar-modern-inner">
                        <div class="block-title has-arrow sidebar-header">
                            <h5><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Les Annonces </font></font></a></h5>
                        </div>
                        <div class="block-content categories-list  list-filter ">
                            <ul class=" list-unstyled">
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Électronique</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;8626</font></font></span></a>
                                </li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voitures</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;123</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Propriété</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;742</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prestations de service</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;8525</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À vendre</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;357</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apprentissage</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;3576</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emplois</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;453</font></font></span></a></li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voitures et véhicules</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;801</font></font></span></a>
                                </li>
                                <li><a href="#"><span class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autre</font></font></span><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;9803</font></font></span></a></li>
                            </ul>
                        </div>  <!--/.categories-list-->

                        <div class="block-title has-arrow ">
                            <h5><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emplacement</font></font></a></h5>
                        </div>
                        <div class="block-content locations-list  list-filter ">
                            <ul class="browse-list list-unstyled long-list">
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atlanta</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wichita</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ancrage</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dallas</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Santa Ana/Anaheim</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Miami</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Plage de Virginie</font></font></a></li>
                                <li class="maxlist-hidden" style="display: none;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">San Diego</font></font></a></li>
                                <li class="maxlist-hidden" style="display: none;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Boston</font></font></a></li>
                                <li class="maxlist-hidden" style="display: none;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Houston</font></font></a></li>
                                <li class="maxlist-hidden" style="display: none;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Salt Lake City</font></font></a></li>
                                <li class="maxlist-hidden" style="display: none;"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres emplacements</font></font></a></li>
                            </ul><p class="maxlist-more"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afficher plus (5)</font></font></a></p>
                        </div>
                        <!--/.locations-list-->

                        <div class="block-title has-arrow">
                            <h5><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Échelle des prix</font></font></a></h5>
                        </div>
                        <div class="block-content categories-list  list-filter ">

                            <form role="form" class="form-inline row">
                                <div class="form-group col-lg-4 col-md-12 no-padding">
                                    <input type="text" placeholder="2000 $" id="minPrice" class="form-control">
                                </div>
                                <div class="form-group col-lg-1 col-md-12 no-padding text-center hidden-md"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                                <div class="form-group col-lg-4 col-md-12 no-padding">
                                    <input type="text" placeholder="3000 $" id="maxPrice" class="form-control">
                                </div>
                                <div class="form-group col-lg-3 col-md-12 no-padding">
                                    <button class="btn btn-default pull-right btn-block-md" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ALLER
                                    </font></font></button>
                                </div>
                            </form>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.list-filter-->
                        <div class="block-title has-arrow">
                            <h5><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vendeur</font></font></a></h5>
                        </div>

                        <div class="block-content categories-list  list-filter ">
                            <ul class="browse-list list-unstyled ">
                                <li><a href="#"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">les annonces {{ $designationCategory }}</font></font></strong> <span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">228 705</font></font></span></a></li>

                            </ul>
                        </div>
                        <!--/.list-filter-->

                        <div class="block-title has-arrow">
                            <h5><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Condition</font></font></a></h5>
                        </div>
                        <div class="block-content categories-list  list-filter ">
                            <ul class="browse-list list-unstyled ">
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau</font></font><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">228 705</font></font></span></a>
                                </li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Utilisé</font></font><span class="count"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28 705</font></font></span></a>
                                </li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aucun</font></font></a></li>
                            </ul>
                        </div>
                        <!--/.list-filter-->
                        <div style="clear:both"></div>
                    </div>


                    <!--/.categories-list-->
                </aside>
            </div>
            <!--/.page-side-bar-->
            <div class="col-md-9 page-content col-thin-left">

                <div class="category-list">


                    <div class="tab-box">
                        <ul class="nav nav-tabs add-tabs tablist" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">les annonces {{ $designationCategory }}</font></font>

                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="listing-filter">
                        <div class="pull-left col-xs-6">
                            <div class="breadcrumb-list"><a href="#" class="current"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annonces liés à {{ $designationCategory }}</font></font></span></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                </font>

                            </font>
                               </a></div>
                        </div>
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>
                    <!--/.listing-filter-->

                    <!-- Mobile Filter bar-->
                    <div class="mobile-filter-bar col-xl-12">
                        <ul class="list-unstyled list-inline no-margin no-padding">
                            <li class="filter-toggle">
                                <a class="">
                                    <i class="  icon-th-list"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    Filtres
                                </font></font></a>
                            </li>
                            <li>

                                <div class="dropdown"><a data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Court de</font></font></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-item"><a href="#" rel="nofollow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pertinence</font></font></a>
                                        </li>
                                        <li class="dropdown-item"><a href="#" rel="nofollow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date</font></font></a>
                                        </li>
                                        <li class="dropdown-item"><a href="#" rel="nofollow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Entreprise</font></font></a>
                                        </li>
                                    </ul>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="menu-overly-mask"></div>
                    <!-- Mobile Filter bar End-->

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="category-list-wrapper row no-margin">

                                @foreach ($product as $value)
                                <div class="item-list">
                                    <div class="row">
                                        <div class="col-md-2 no-padding photobox">
                                            <div class="add-private-tabimage">
                                              <a href="{{ route('detail.ads', $value->slug) }}">
                                                <img class="thumbnail no-margin" src="{{ asset('cover/'.$value->cover_image) }}" alt="image"></a>
                                            </div>
                                        </div>
                                        <!--/.photobox-->
                                        <div class="col-md-7 add-desc-box">
                                            <div class="ads-details">
                                                <h5 class="add-title"><a href="javascript:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                    {{ $value->name }}</font></font></a></h5>
                                                <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" data-bs-original-title="Business Ads"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B</font></font></span>
                                           <span class="date"><i class=" icon-clock"> </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->created_at->diffForHumans() }}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - </font></font><span class="category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->category->name }}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> -
                                           </font></font><span class="item-location"><i class="fa fa-map-marker-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $value->city}} </font></font></span>
                                        </span>
                                            </div>
                                        </div>
                                        <!--/.add-desc-box-->
                                        <div class="col-md-3 text-right  price-box">
                                            <h2 class="item-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$value->price}} €</font></font></h2>
                                            <a class="btn btn-danger  btn-sm make-favorite" href="{{route('detail.ads', $value->slug)}}"> <i class="fa fa-eye"></i>

                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Detail</font></font></span> </a>
                                            <a class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liste d'envie</font></font></span>
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

                <div class="pagination-bar text-center">
                    <nav aria-label="Navigation dans les pages" class="d-inline-b">
                        <ul class="pagination">

                          {{  $product->links() }}
                        </ul>
                    </nav>
                </div>
                <!--/.pagination-bar -->


            </div>
            <!--/.page-content-->

        </div>
    </div>
</div>

@endsection
