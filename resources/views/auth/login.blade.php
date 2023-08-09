@extends('layout.app')


@section('content')

{{-- <main class="page-wrapper">

    <div class="container py-4 py-lg-5 my-4">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card border-0 shadow">
            <div class="card-body">
              <h2 class="h4 mb-1">Se Connecter </h2>
              <div class="py-3">
                <h3 class="d-inline-block align-middle fs-base fw-medium mb-2 me-2">Si vous n'avez pas de compte  alors
                    <a href="{{route('register')}}"> cliquez-ici !</a>
                </h3>

              </div>
              <hr>
              <h3 class="fs-base pt-4 pb-2">Renseingez les informations</h3>
              @error('email')
              <small class="text-danger">{{$message}}</small>

              @enderror
              <form class="needs-validation" novalidate="" method="POST" action="{{route('login')}}">
                @csrf
                <div class="input-group mb-3"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" placeholder="Email" required="" name="email" value="{{old('email')}}">


                </div>
                <div class="input-group mb-3"><i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <div class="password-toggle w-100">
                    <input class="form-control" type="password" placeholder="Password" required="" name="password">

                    @error('password')

                    <small class="text-danger">{{$message}}</small>
                    @enderror
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox" name="password"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="form-check">

                  </div><a class="nav-link-inline fs-sm" href="{{route('password.request')}}">Mot de passe oublié?</a>
                </div>
                <hr class="mt-4">
                <div class="text-end pt-4">
                  <button class="btn btn-primary" type="submit"><i class="ci-sign-in me-2 ms-n21"></i>Se Connecter</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main> --}}


  <div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 login-box">
                <div class="card card-default">
                    <div class="panel-intro text-center">
                        <h2 class="logo-title">
                            <!-- Original Logo will be placed here  -->
                            <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VTP </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MARKET</font></font></span>
                        </h2>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('login') }}">
                          @csrf
                            <div class="form-group">
                                <label for="sender-email" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adresse E-mail: @error('email')
                                  <small class="text-danger">{{ $message }}</small>
                                  
                                @enderror</font></font></label>

                                <div class="input-icon"><i class="icon-user fa"></i>
                                    <input  type="text" name="email" placeholder="Adresse E-mail" class="form-control email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user-pass" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe:</font></font></label>

                                <div class="input-icon"><i class="icon-lock fa"></i>
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="user-pass">
                                </div>
                            </div>


                            <div class="form-group">
                                <button type="submit"  class="btn btn-primary  btn-block"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se Connecter</font></font></button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">

                        <div class="checkbox pull-left">
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rester connecté</font></font></span>
                            </label>
                        </div>


                        <p class="text-center pull-right"><a href="{{ route('password.request') }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe perdu?</font></font></a>
                        </p>

                        <div style=" clear:both"></div>
                    </div>
                </div>
                <div class="login-box-btm text-center">
                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vous n'avez pas de compte&nbsp;? </font></font><br>
                        <a href="{{ route('register') }}"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'inscrire !</font></font></strong> </a></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
