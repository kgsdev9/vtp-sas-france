@extends('layout.app')

@section('content')





<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 login-box">
                <div class="card card-default">
                  
                    <div class="card-body">
                        <div class="tab-pane  active " id="alladslist">
                            <div class="category-list-wrapper row no-margin property-list">
                    
                                
                                @foreach ($allSellers as $value)
                                    
                                
                                <div class="item-list">

                                    <div class="row">


                                        <div class="col-md-3 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span> 
                                                <a href="#">
                                                    @if($value->photo !=null)
                                                    <img src="{{asset('seller/images/photo/'.$value->photo)}}"  style="height:150px; width:150px;">
                                                    @else
                                                    <img src="{{asset('seller/images/logo/'.$value->logo)}}"  style="height:150px;width:150px;">
                                                    @endif
                                                
                                                </a></div>
                                        </div>
                                        <!--/.photobox-->
                                        <div class="col-md-6 add-desc-box">
                                            <div class="ads-details">
                                                <h5 class="add-title"><a href="property-details.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                 {{ $value->fullname }}</font></font></a></h5>
                                                <span class="info-row"> <span class="item-location">
                                                    <font style="vertical-align: inherit;">
                                                        <i class="fa fa-map-marker-alt"></i>    <font style="vertical-align: inherit;">{{ $value->adresse }}  </font>
                                                </font>
                                               
                                                 </span>
                                                 </span>
                                                <div class="prop-info-box">

                                                    <div class="prop-info">
                                                        <div class="clearfix prop-info-block">
                                                            <span class="title "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pays</font></font></span>
                                                            <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $value->country }} </font></font></span>
                                                        </div>
                                                        <div class="clearfix prop-info-block middle">
                                                            <span class="title prop-area"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ville</font></font></span>
                                                            <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  {{ $value->city }}</font></font></span>
                                                        </div>
                                                        <div class="clearfix prop-info-block">
                                                            <span class="title prop-room"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ count($value->products) }}</font></font></span>
                                                            <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Total Annonce</font></font></span>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!--/.add-desc-box-->
                                        <div class="col-md-3 text-right  price-box">
                                            <h5 class="item-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Inscrit depuis {{ $value->created_at->diffForHumans() }}</font></font></h5>
                                            <div style="clear: both"></div>

                                            <a class="btn btn-success btn-sm bold" href="{{ route('boutique.annonceurs', $value->slug)}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                               Consulter mes Annonces 
                                            </font></font></a>


                                        </div>
                                        <!--/.add-desc-box-->
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!--/.category-list-wrapper-->
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
</div>



@endsection