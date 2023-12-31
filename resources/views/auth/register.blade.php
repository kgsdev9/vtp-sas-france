@extends('layout.app')


@section('content')


  <div id="wrapper" style="padding-top:20px;">


<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 page-content">
                <div class="inner-box category-content">
                    <h2 class="title-2"><i class="icon-user-add"></i> Créer Votre Compte Sur VTP MARKET  </h2>

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal"  action="{{route('register')}}" method="POST">
                                @csrf


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                                <fieldset>
                                    <!-- Text input-->


                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Nom D'utilisateur @error('name')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror <sup>*</sup></label>

                                        <div class="col-md-6">
                                            <input name="name" placeholder="Vtp Market" class="form-control input-md" type="text" value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Nom Complet  @error('fullname')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror <sup>*</sup></label>

                                        <div class="col-md-6">
                                            <input name="fullname" placeholder="Bernard arnaud" class="form-control input-md" type="text" value="{{old('fullname')}}">
                                        </div>
                                    </div>


                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Télephone  @error('telephone')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror <sup>*</sup></label>

                                        <div class="col-md-6">
                                            <input name="telephone" placeholder="+334567776" class="form-control input-md" type="text" value="{{old('telephone')}}">
                                        </div>
                                    </div>


                                    <div class="form-group  row required">
                                        <label class="col-md-4 control-label">Adresse  @error('adresse')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror <sup>*</sup></label>

                                        <div class="col-md-6">
                                          <textarea name="adresse" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>









                                    <div class="form-group  row required">
                                        <label for="inputEmail3" class="col-md-4 control-label">Email  @error('email')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror
                                            <sup>*</sup></label>

                                        <div class="col-md-6">
                                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{old('email')}}">
                                        </div>
                                    </div>
                                    <div class="form-group  row required">
                                        <label for="inputPassword3" class="col-md-4 control-label">Password  @error('password')
                                            <small class="text-danger">{{ $message }}</small>

                                        @enderror  </label>

                                        <div class="col-md-6">
                                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">


                                                <small id="passwordHelpBlock" class="form-text text-muted">


                                                au moins 6 caractéres
                                                    </small>
                                        </div>
                                    </div>

                                    <div class="form-group  row required">
                                        <label for="inputPassword3" class="col-md-4 control-label">Confirmer le mot de passe  </label>

                                        <div class="col-md-6">
                                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Password">


                                                <small id="passwordHelpBlock" class="form-text text-muted">


                                                    au moins 6 caractéres
                                                    </small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 control-label"></label>

                                        <div class="col-md-8">
                                            <div class="termbox mb10">
                                                <div class="col-auto my-1 no-padding">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                        <label class="custom-control-label" for="customControlAutosizing">  <span class="custom-control-description"> J'accepte les conditions d'utilisation de VTP
        </span></label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div style="clear:both"></div>

                                            <button class="btn btn-primary">S'inscrire</button>
                                          </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.page-content -->

            <div class="col-md-4 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                        <h3><strong>Publiez vos annonces gratuitement</strong></h3>

                        <p>déposez vos annonces rapidement et faciliement</p>
                    </div>
                    <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                        <h3><strong>Gerez vos annonces facilement</strong></h3>

                        <p>Nous vous propopons un espace marchant suivre l'evolution de vos produits.</p>
                    </div>
                    <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                        <h3><strong>Ajoutez vos annonces favorites à votre espace personnalisée.</strong></h3>

                        <p>Gérez vos liste d'envie et revenez plus tard pour effectuer les commandes de vos produits.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main-container -->


</div>


@endsection
