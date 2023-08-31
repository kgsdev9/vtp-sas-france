
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>Bienvenue Sur VTP MARKET PLACE </title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/owl.theme.css')}}">
    <script>

        paceOptions = {
            elements: true
        };
    </script>




@livewireStyles
</head>
<body>
<div id="wrapper">


    <div class="header">
        <nav class="navbar  fixed-top navbar-site navbar navbar-expand-md"
             role="navigation">
            <div class="container">

                <div class="navbar-identity">


                    <a href="{{ URL('/') }}" class="navbar-brand logo logo-title">
    			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
    			</span>VTP <span>MARKET </span> </a>

                    <button class="navbar-toggler -toggler pull-right" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30"
                             focusable="false"><title>Menu</title>
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10"
                                  d="M4 7h22M4 15h22M4 23h22"/>
                        </svg>
                    </button>




                </div>


                <div class="navbar-collapse collapse" id="navbarsDefault">
                    <ul class="nav navbar-nav me-md-auto navbar-left">

                    </ul>
                    <ul class="nav navbar-nav ml-auto navbar-right">
                        <li class="nav-item"><a href="{{ route('home.annonceurs') }}" class="nav-link"><i class="fas fa-bullhorn"></i> Annonces</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('home.seller') }}" class="nav-link"><i class="far fa-address-card"></i> Boutique</a>
                        </li>

                        @guest
                        <li class="dropdown no-arrow nav-item"><a href="#" class="nav-link dropdown-toggle" href="#"
                            id="dropdown-nav-01" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <span>Mon Compte</span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
                            <ul
                            class="dropdown-menu user-menu dropdown-menu-right" aria-labelledby="dropdown01">
                            <li class=" dropdown-item"><a href="{{route('login')}}"><i class="icon-home"></i>
                            Connexion

                            </a>
                            </li>
                            <li class="dropdown-item"><a href="{{route('register')}}"><i class="icon-th-thumb"></i> Inscription
                            </a>
                            </li>
                            <li class="dropdown-item"><a href="{{route('password.request')}}"><i class="icon-heart"></i>
                            Mot de passe oublié</a>
                            </li>

                            </ul>
                            </li>
                            @else
                            <li class="dropdown no-arrow nav-item"><a href="#" class="nav-link dropdown-toggle" href="#"
                                id="dropdown-nav-01" data-bs-toggle="dropdown"
                                aria-expanded="false">

                            <span>Bienvenue {{ Auth::user()->name }}</span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
                            <ul
                            class="dropdown-menu user-menu dropdown-menu-right" aria-labelledby="dropdown01">
                            <li class="active dropdown-item"><a href="javascript:void(0)"><i class="icon-home"></i>
                            Menu

                            </a>
                            </li>
                            <li class="dropdown-item"><a href="{{URL('/dashboard')}}"><i class="icon-th-thumb"></i> Mon Profile
                            </a>
                            </li>
                            <li class="dropdown-item"><a href="{{URL('dashboard/prdouct/forms')}}"><i class="icon-heart"></i>
                            Nouvelle Annonce  </a>
                            </li>
                            <li class="dropdown-item"><a href="{{URL('/dashboard/product/list')}}"><i
                                class="icon-star-circled"></i> Mes annonces

                            </a>
                            </li>
                            <li class="dropdown-item"><a href="#"><i
                                class="icon-folder-close"></i>Ma Liste d'envie

                            </a>
                            </li>


                            <li class="dropdown-item">
                                <a class="icon-logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Se Deconnecter') }}
                             </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </li>
                            </ul>
                            </li>
                        @endguest

                        <li class="nav-item"><a href="http://formation.vtp-market.com/" class="nav-link" target="_blank"><i class="far fa-address-card"></i>VTP Formation </a>
                        </li>

                        <li class="postadd nav-item"><a class="btn btn-block   btn-border btn-post btn-danger nav-link"
                                                        href="{{URL('dashboard/prdouct/forms')}}"> <i class="fa fa-plus"></i> Je Publie</a>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->





@yield('content')


<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div>
                <div class=" text-center paymanet-method-logo">
                    <img alt="img" src="{{ asset('assets/mobilemoey.png') }}">
                    <img alt="img" src="{{ asset('assets/images/site/payment/visa_card.png') }}">
                    <img alt="img" src="{{ asset('assets/images/site/payment/paypal.png') }}">
                    <img alt="img" src="{{ asset('assets/images/site/payment/master_card.png') }}">
                </div>
                    <div class="copy-info text-center">
                        &copy; 2012-2023 VTP. Tous les droits sont réservés.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- /.wrapper -->




<!-- Placed at the end of the document so the pages load faster -->



<script src="{{ asset('assets/jquery.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>

<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>

<script src="{{ asset('assets/js/vendors.min.js') }}"></script>

<script src="{{ asset('assets/js/main.min.js') }}"></script>


<!-- include jquery autocomplete plugin  -->
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/usastates.js') }}"></script>
<script src="{{ asset('assets/plugins/autocomplete/autocomplete-demo.js') }}"></script>
<!-- include custom script for site  -->
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });


</script>
@livewireScripts
@include('flashy::message')
</body>
</html>
