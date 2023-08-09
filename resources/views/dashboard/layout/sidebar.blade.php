<div class="nk-sidebar nk-sidebar-fixed is-dark nk-sidebar-mobile nk-sidebar-active" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none toggle-active" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex toggle-active" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">

        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">

            @can('is_carrier')
            <div class="nk-sidebar-menu" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -24px 0px -48px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 24px 0px 48px;">
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{route('dashboard')}}" class="nk-menu-link" data-bs-original-title="" title="">
                            <span class="nk-menu-icon"> <em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Tableau de bord</span>
                        </a>
                    </li>




                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-bs-original-title="" title="">
                            <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                            <span class="nk-menu-text">Mon entreprise</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{url('dashboard/profil/offre/forms')}}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Ajouter une offre</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('liste.offert')}}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Liste de mes offres</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('detail.entreprise')}}" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Infos Entreprise</span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->


                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-bs-original-title="" title="">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                            <span class="nk-menu-text">Mes Commandes</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link" data-bs-original-title="" title=""><span class="nk-menu-text">Liste des commandes  </span></a>
                            </li>
                        </ul>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->

            </div>
            @endcan
        </div>
    </div>
</div>
<div class="simplebar-placeholder" style="width: auto; height: 592px;">
</div>
</div>
<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
    <div class="simplebar-scrollbar" style="width: 0px; display: none;">
    </div>
</div>
<div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
    <div class="simplebar-scrollbar" style="height: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div></div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
