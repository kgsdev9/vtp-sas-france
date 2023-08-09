
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
            <div class="row">

                <div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
                    <div class="footer-col">
                        <h4 class="footer-title">A propos </h4>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="#">À propos de la société</a></li>
                            <li><a href="#">Pour le business</a></li>
                            <li><a href="#">Nos partenaires</a></li>
                            <li><a href="#">contact presse</a></li>
                            <li><a href="#">Carrières</a></li>
                            <li><a href="event-home.html">Événements</a></li>
                        </ul>
                    </div>
                </div>

                <div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
                    <div class="footer-col">
                        <h4 class="footer-title">AIDE & CONTACT</h4>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="#">
                                Restez en sécurité en ligne
                            </a></li>
                            <li><a href="#">
                                Comment vendre</a></li>
                            <li><a href="#">
                                Comment acheter
                            </a></li>
                            <li><a href="#">Règles de publication
                            </a></li>

                            <li><a href="#">
                                Promouvoir votre annonce
                            </a></li>

                        </ul>
                    </div>
                </div>

                <div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
                    <div class="footer-col">
                        <h4 class="footer-title">Liens utiles</h4>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="faq.html">FAQ
                            </a></li>
                            <li><a href="blogs.html">Acutalités
                            </a></li>
                            <li><a href="#">
                               Produit Populaire
                            </a></li>
                            <li><a href="#"> Plan du site
                            </a></li>
                            <li><a href="#"> Avis des clients
                        </a></li>


                        </ul>
                    </div>
                </div>
                <div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
                    <div class="footer-col">
                        <h4 class="footer-title">Compte</h4>
                        <ul class="list-unstyled footer-nav">

                            @guest
                            <li><a href="{{ route('login') }}">Mon Compte
                            </a></li>
                            @else

                            <li><a href="{{ route('login') }}">Connexion
                            </a></li>
                            <li><a href="{{ route('register') }}">Inscription
                            </a></li>
                            <li><a href="{{ route('product_list') }}"> Mes Annonces
                            </a></li>
                            <li><a href="{{ route('dashboard') }}"> Profile
                            </a></li>
                            @endguest

                        </ul>
                    </div>
                </div>
                <div class=" col-xl-4 col-xl-4 col-md-4 col-12">
                    <div class="footer-col row">

                        <div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
                            <div class="mobile-app-content">
                                <h4 class="footer-title">Mobile (Bientot Disponible)</h4>
                                <div class="row ">
                                    <div class="col-6  ">
                                        <a class="app-icon" target="_blank"  href="#">
                                            <span class="hide-visually">iOS app</span>
                                            <img src="{{ asset('assets/images/site/app_store_badge.svg') }}" alt="Available on the App Store">
                                        </a>
                                    </div>
                                    <div class="col-6  ">
                                        <a class="app-icon"  target="_blank" href="#">
                                            <span class="hide-visually">Android App</span>
                                            <img src="{{ asset('assets/images/site/google-play-badge.svg') }}" alt="Available on the App Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
                            <div class="hero-subscribe">
                                <h4 class="footer-title no-margin">Suivez-nous !</h4>
                                <ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
                                    <li><a class="icon-color fb" title="Facebook" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-facebook-f"></i> </a></li>
                                    <li><a class="icon-color tw" title="Twitter" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-twitter"></i> </a></li>
                                    <li><a class="icon-color gp" title="Google+" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-google-plus-g"></i> </a></li>
                                    <li><a class="icon-color lin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-linkedin"></i> </a></li>
                                    <li><a class="icon-color pin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-pinterest-p"></i> </a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>

                <div class="col-xl-12">
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
</body>
</html>
