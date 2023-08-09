@extends('layout.app')

@section('content')

<main class="page-wrapper">

    <div class="container py-4 py-lg-5 my-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="h3 mb-4">Rénitilaiser votre mot de passe?</h2>
          <p class="fs-md">Vous serez redirigé ves l'espace de connexion apres vos changements.
            VTP GROUP SUPPORT
            </p>

          <div class="card py-2 mt-4">
            <form class="card-body needs-validation" novalidate="" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ request()->token }}">
              <div class="mb-3">
                <label class="form-label" for="recover-email">Votre Email Du Compte  VTP</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ request()->email}}"  autocomplete="email" autofocus placeholder="Entrer l'adresse E-mail du compte  VTP">
                <div class="invalid-feedback">@error('email')
                    <small>{{$message}}</small>
                @enderror</div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="recover-email">Entrer Votre Nouveau Mot de passe</label>
                <input id="password"  placeholder="Nouveau mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                <div class="invalid-feedback">@error('password')

                    <small class="text-danger">{{$message}}</small>

                @enderror</div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="recover-email">Confirmer Votre Nouveau Mot de passe</label>
                <input id="password-confirm"  placeholder="Confirmer le nouveau mot de passe" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">

              </div>
              <button class="btn btn-primary" type="submit">Modifier le mot de passe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
