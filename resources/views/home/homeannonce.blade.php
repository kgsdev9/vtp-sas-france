@extends('layout.app')


@section('content')
<div id="wrapper" style="padding-top: 80px;">

    <!-- /.header -->

    <label class="theme-switcher theme-switcher-left-right">
        <span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
        <span class="theme-switcher-handle"></span>
    </label>

    <div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
    	<div class="inner">
    	<div class="container ">
    		<form action="#" method="GET">
    			<div class="row">
    				<div class="col-md-3">
    					<input class="form-control keyword" type="text" name="price" placeholder="Prix">
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="category" id="search-category" style="display: none;">
    						<option selected="selected" value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">toutes catégories</font></font></option>
    						<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Véhicules -</font></font></option>
    						<option value="Cars"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voitures</font></font></option>
    						<option value="Commercial vehicles"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Véhicules commerciaux</font></font></option>
    						<option value="Motorcycles"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">motocyclettes</font></font></option>
    						<option value="Motorcycle Equipment"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Équipement auto et moto</font></font></option>
    						<option value="Boats"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bateaux</font></font></option>
    						<option value="Vehicles"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres véhicules</font></font></option>
    						<option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Maison et Enfants -</font></font></option>
    						<option value="Appliances"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">appareils électroménagers</font></font></option>
    						<option value="Inside"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À l'intérieur</font></font></option>
    						<option value="Games"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jeux et vêtements</font></font></option>
    						<option value="Garden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jardin</font></font></option>
    						<option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Multimédia -</font></font></option>
    						<option value="Telephony"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphonie</font></font></option>
    						<option value="Image"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Image et son</font></font></option>
    						<option value="Computers"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ordinateurs et accessoires</font></font></option>
    						<option value="Video"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jeux vidéo et consoles</font></font></option>
    						<option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Immobilier -</font></font></option>
    						<option value="Apartment"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Appartement</font></font></option>
    						<option value="Home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maison</font></font></option>
    						<option value="Vacation"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Locations de vacances</font></font></option>
    						<option value="Commercial"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bureaux commerciaux et locaux</font></font></option>
    						<option value="Grounds"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terrains</font></font></option>
    						<option value="Houseshares"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colocations</font></font></option>
    						<option value="Other real estate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres biens immobiliers</font></font></option>
    						<option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Prestations de service -</font></font></option>
    						<option value="Jobs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emplois</font></font></option>
    						<option value="Job application"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Demande d'emploi</font></font></option>
    						<option value="Services"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prestations de service</font></font></option>
    						<option value="Price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix</font></font></option>
    						<option value="Business"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Affaires et bonne volonté</font></font></option>
    						<option value="Professional"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Matériel professionnel</font></font></option>
    						<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Supplémentaire -</font></font></option>
    						<option value="Other"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autre</font></font></option>
    					</select>
                        <div class="nice-select form-control selecter" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">toutes catégories</font></font></span><ul class="list"><li data-value="" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">toutes catégories</font></font></li><li data-value="Vehicles" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Véhicules -</font></font></li><li data-value="Cars" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voitures</font></font></li><li data-value="Commercial vehicles" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Véhicules commerciaux</font></font></li><li data-value="Motorcycles" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">motocyclettes</font></font></li><li data-value="Motorcycle Equipment" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Équipement auto et moto</font></font></li><li data-value="Boats" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bateaux</font></font></li><li data-value="Vehicles" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres véhicules</font></font></li><li data-value="House" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Maison et Enfants -</font></font></li><li data-value="Appliances" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">appareils électroménagers</font></font></li><li data-value="Inside" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">À l'intérieur</font></font></li><li data-value="Games" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jeux et vêtements</font></font></li><li data-value="Garden" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jardin</font></font></li><li data-value="Multimedia" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Multimédia -</font></font></li><li data-value="Telephony" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Téléphonie</font></font></li><li data-value="Image" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Image et son</font></font></li><li data-value="Computers" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ordinateurs et accessoires</font></font></li><li data-value="Video" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jeux vidéo et consoles</font></font></li><li data-value="Real" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Immobilier -</font></font></li><li data-value="Apartment" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Appartement</font></font></li><li data-value="Home" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maison</font></font></li><li data-value="Vacation" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Locations de vacances</font></font></li><li data-value="Commercial" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bureaux commerciaux et locaux</font></font></li><li data-value="Grounds" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terrains</font></font></li><li data-value="Houseshares" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colocations</font></font></li><li data-value="Other real estate" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres biens immobiliers</font></font></li><li data-value="Services" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Prestations de service -</font></font></li><li data-value="Jobs" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Emplois</font></font></li><li data-value="Job application" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Demande d'emploi</font></font></li><li data-value="Services" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prestations de service</font></font></li><li data-value="Price" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prix</font></font></li><li data-value="Business" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Affaires et bonne volonté</font></font></li><li data-value="Professional" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Matériel professionnel</font></font></li><li data-value="dropoff" class="option disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- Supplémentaire -</font></font></li><li data-value="Other" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autre</font></font></li></ul></div>
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="location" id="id-location" style="display: none;">
    						<option selected="selected" value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tous les emplacements</font></font></option>
    						<option value="AL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></option>
    						<option value="AK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alaska</font></font></option>
    						<option value="AZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arizona</font></font></option>
    						<option value="AR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arkansas</font></font></option>
    						<option value="CA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Californie</font></font></option>
    						<option value="CO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colorado</font></font></option>
    						<option value="CT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connecticut</font></font></option>
    						<option value="DE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Delaware</font></font></option>
    						<option value="DC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">District de Colombie</font></font></option>
    						<option value="FL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Floride</font></font></option>
    						<option value="GA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Géorgie</font></font></option>
    						<option value="HI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hawaii</font></font></option>
    						<option value="ID"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Idaho</font></font></option>
    						<option value="IL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Illinois</font></font></option>
    						<option value="IN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Indiana</font></font></option>
    						<option value="IA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iowa</font></font></option>
    						<option value="KS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kansas</font></font></option>
    						<option value="KY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kentucky</font></font></option>
    						<option value="LA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Louisiane</font></font></option>
    						<option value="ME"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maine</font></font></option>
    						<option value="MD"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maryland</font></font></option>
    						<option value="MA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Massachusetts</font></font></option>
    						<option value="MI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Michigan</font></font></option>
    						<option value="MN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minnesota</font></font></option>
    						<option value="MS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mississippi</font></font></option>
    						<option value="MO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Missouri</font></font></option>
    						<option value="MT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Montana</font></font></option>
    						<option value="NE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nebraska</font></font></option>
    						<option value="NV"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nevada</font></font></option>
    						<option value="NH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New Hampshire</font></font></option>
    						<option value="NJ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New Jersey</font></font></option>
    						<option value="NM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau Mexique</font></font></option>
    						<option value="NY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York</font></font></option>
    						<option value="NC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caroline du Nord</font></font></option>
    						<option value="ND"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dakota du nord</font></font></option>
    						<option value="OH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ohio</font></font></option>
    						<option value="OK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oklahoma</font></font></option>
    						<option value="OR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oregon</font></font></option>
    						<option value="PA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pennsylvanie</font></font></option>
    						<option value="RI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rhode Island</font></font></option>
    						<option value="SC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caroline du Sud</font></font></option>
    						<option value="SD"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dakota du Sud</font></font></option>
    						<option value="TN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tennessee</font></font></option>
    						<option value="TX"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Texas</font></font></option>
    						<option value="UT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Utah</font></font></option>
    						<option value="VT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vermont</font></font></option>
    						<option value="VA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Virginie</font></font></option>
    						<option value="WA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Washington</font></font></option>
    						<option value="WV"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Virginie-Occidentale</font></font></option>
    						<option value="WI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wisconsin</font></font></option>
    						<option value="WY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wyoming</font></font></option>
    						<option value="Other-Locations"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres emplacements</font></font></option>
    					</select>
                        <div class="nice-select form-control selecter" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tous les emplacements</font></font></span><ul class="list"><li data-value="" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tous les emplacements</font></font></li><li data-value="AL" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alabama</font></font></li><li data-value="AK" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alaska</font></font></li><li data-value="AZ" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arizona</font></font></li><li data-value="AR" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arkansas</font></font></li><li data-value="CA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Californie</font></font></li><li data-value="CO" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Colorado</font></font></li><li data-value="CT" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connecticut</font></font></li><li data-value="DE" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Delaware</font></font></li><li data-value="DC" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">District de Colombie</font></font></li><li data-value="FL" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Floride</font></font></li><li data-value="GA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Géorgie</font></font></li><li data-value="HI" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hawaii</font></font></li><li data-value="ID" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Idaho</font></font></li><li data-value="IL" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Illinois</font></font></li><li data-value="IN" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Indiana</font></font></li><li data-value="IA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iowa</font></font></li><li data-value="KS" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kansas</font></font></li><li data-value="KY" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kentucky</font></font></li><li data-value="LA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Louisiane</font></font></li><li data-value="ME" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maine</font></font></li><li data-value="MD" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Maryland</font></font></li><li data-value="MA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Massachusetts</font></font></li><li data-value="MI" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Michigan</font></font></li><li data-value="MN" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Minnesota</font></font></li><li data-value="MS" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mississippi</font></font></li><li data-value="MO" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Missouri</font></font></li><li data-value="MT" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Montana</font></font></li><li data-value="NE" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nebraska</font></font></li><li data-value="NV" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nevada</font></font></li><li data-value="NH" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New Hampshire</font></font></li><li data-value="NJ" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New Jersey</font></font></li><li data-value="NM" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nouveau Mexique</font></font></li><li data-value="NY" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">New York</font></font></li><li data-value="NC" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caroline du Nord</font></font></li><li data-value="ND" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dakota du nord</font></font></li><li data-value="OH" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ohio</font></font></li><li data-value="OK" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oklahoma</font></font></li><li data-value="OR" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Oregon</font></font></li><li data-value="PA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pennsylvanie</font></font></li><li data-value="RI" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rhode Island</font></font></li><li data-value="SC" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Caroline du Sud</font></font></li><li data-value="SD" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dakota du Sud</font></font></li><li data-value="TN" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tennessee</font></font></li><li data-value="TX" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Texas</font></font></li><li data-value="UT" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Utah</font></font></li><li data-value="VT" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vermont</font></font></li><li data-value="VA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Virginie</font></font></li><li data-value="WA" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Washington</font></font></li><li data-value="WV" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Virginie-Occidentale</font></font></li><li data-value="WI" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wisconsin</font></font></li><li data-value="WY" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wyoming</font></font></li><li data-value="Other-Locations" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Autres emplacements</font></font></li></ul></div>
    				</div>
    				<div class="col-md-3">
    					<button class="btn btn-block btn-primary btn-gradient" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recherche</font></font><i class="fa fa-search"></i>
    					</button>
    				</div>
    			</div>
    		</form>
    	</div>
    	</div>
    </div>
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
