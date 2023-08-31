@extends('layout.app')


@section('content')
<div id="wrapper" style="padding-top: 80px;">

    <!-- /.header -->

    <label class="theme-switcher theme-switcher-left-right">
        <span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
        <span class="theme-switcher-handle"></span>
    </label>

    <!-- /.search-row -->
    <div class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-md-12 page-content col-thin-left">
                    <div class="category-list make-grid">
                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Toutes les annonces</font></font></span></a><font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">

                                    </div>
                            </div>
                            <div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view active"><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>
                        <div class="menu-overly-mask"></div>
                        <!-- Mobile Filter bar End-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="category-list-wrapper row no-margin">
                                    @foreach ($annonces as $value)
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-md-2 no-padding photobox">
                                                <div class="add-private-tabimage">  <a href="{{route('detail.ads', $value->slug)}}">
                                                    <img class="thumbnail no-margin" src="{{ asset('cover/'.$value->cover_image) }}" alt="image"></a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="add-desc-box col-md-9">
                                                <div class="ads-details">
                                                    <h5 class="add-title"><a href="{{route('detail.ads', $value->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                       {{Str::limit($value->name, 26) }}</font></font></a></h5>
                                                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" data-bs-original-title="Business Ads"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B</font></font></span>
                                                <span class="date"><i class=" icon-clock"> </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->created_at->diffForHumans() }}</font></font>
                                                </span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - </font></font>
                                                <span class="category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->category->name}}</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> -
                                        </font></font>
                                        <span class="item-location"><i class="fa fa-map-marker-alt"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->city}}</font></font></span>
                                            </span>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">
                                                <h2 class="item-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $value->price}} €</font></font></h2>

                                                <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>

                                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Top</font></font></span> </a>
                                                <a class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>
                                                    <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envie</font></font></span>
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

                    			</li>
                    		</ul>
                    	</nav>
                    </div>
                    <!--/.pagination-bar -->


                </div>
                <!--/.page-content-->

            </div>
        </div>
    </div>
    <!-- /.main-container -->


</div>
@endsection
