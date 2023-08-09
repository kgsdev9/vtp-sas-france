@extends('layout.app')


@section('content')
<main class="page-wrapper">

    <div class="container py-4 py-lg-5 my-4">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <h2 class="h3 mb-4">Aide avec le mot de passe ?</h2>
          <p class="fs-md">Saisissez l'adresse e-mail associé à votre compte VTP. Nous vous enverrons un lien sur cette adresse e-mail pour réinitialiser votre mot de passe</p>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

          <div class="card py-2 mt-4">
            <form class="card-body needs-validation" novalidate="" method="POST" action="{{ route('password.email') }}">
                @csrf
              <div class="mb-3">
                <label class="form-label" for="recover-email">Entrer votre adresse email </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrer l'adresse E-mail">
                <div class="invalid-feedback">
                    @error('email')
                        <h8 class="text-danger">{{$message}}</h8>
                    @enderror
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Rénitialiser</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
