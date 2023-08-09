@extends('layout.app')
@section('content')

<div class="main-container">
    <div class="container">
        <div class="row">
           @include('dashboard.slide-bar')
            <!--/.page-sidebar-->

            <div class="col-md-9 page-content">
                <div class="inner-box">
                    <div class="row">
                        <div class="col-md-5 col-xs-4 col-xxs-12">
                            <h3 class="no-padding text-center-480 useradmin"><a href="#"><img class="userImg" src="{{ asset('user.jpg')}}" alt="utilisateur"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ Auth::user()->name }}
                            </font></font></a></h3>
                        </div>
                        <div class="col-md-7 col-xs-8 col-xxs-12">
                            <div class="header-data text-center-xs">
                                <div class="hdata">
                                    <div class="mcol-left">
                                        <!-- Icon with red background -->
                                        <i class="fas fa-envelope ln-shadow"></i></div>
                                    <div class="mcol-right">
                                        <!-- Number of visitors -->
                                        <p><a href="account-message-inbox.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></a> <em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Poster</font></font></em></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!-- Traffic data -->
                                <div class="hdata">
                                    <div class="mcol-left">
                                        <!-- Icon with red background -->
                                        <i class="fa fa-eye ln-shadow"></i></div>
                                    <div class="mcol-right">
                                        <!-- Number of visitors -->
                                        <p><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></a> <em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">visites</font></font></em></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!-- revenue data -->
                                <div class="hdata">
                                    <div class="mcol-left">
                                        <!-- Icon with green background -->
                                        <i class="icon-th-thumb ln-shadow"></i></div>
                                    <div class="mcol-right">
                                        <!-- Number of visitors -->
                                        <p><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></a><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Les publicités</font></font></em></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!-- revenue data -->
                                <div class="hdata">
                                    <div class="mcol-left">
                                        <!-- Icon with blue background -->
                                        <i class="fa fa-user ln-shadow"></i></div>
                                    <div class="mcol-right">
                                        <!-- Number of visitors -->
                                        <p><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></a> <em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Favoris</font></font></em></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            <!--/.page-content-->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>

@endsection
