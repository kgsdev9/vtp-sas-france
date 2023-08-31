@extends('layout.app')

@section('content')

<div id="main-content" style="margin-top: 6%">

    <div class="container-fluid">
        <form class="js-validate" novalidate="novalidate" method="POST" action="  {{ route('seller.store') }} " enctype="multipart/form-data">
            @csrf

            <h3>Renseignez les informations </h3>
            <div class="row">
                    <!-- Form Group -->
                    <div class="js-form-message form-group col-md-6">
                        <label class="form-label" for="signinSrnomExample3">Entrer votre nom et prénom @error('fullname')

                    <small style="color:red">{{ $message}}</small>
                                    @enderror</label>
                                                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="fullname"  placeholder="Jean Marie"  value="{{ old('fullname') }}"  >
                                    </div>
                                    <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div class="js-form-message form-group col-md-6">
                                                <label class="form-label" for="signinSrnomExample3">Numero whatsapp @error('firstname')

                    <small style="color:red">{{ $message}}</small>
                    @enderror</label>
                                                            <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" name="phonenumber"  placeholder="Entrer votre prénom"  value=""
                            >
                            </div>
                            <!-- End Form Group -->

            </div>
            <div class="row">
                <div class="col-md-6">
                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="form-label" for="signinSrPasswordExample2">Numero Mobile Money (Recommandé si vous etes en Afrique)  @error('mobilemoney')

                                <small style="color:red">{{ $message}}</small>
                                @enderror</label></label>
                                                                    <input type="number" class="form-control" name="mobilemoney" id="signinSrPasswordExample2" placeholder="Entrer votre numéro de téléphone"
                                                                >
                        </div>
                        <!-- End Form Group -->
                </div>

                <div class="col-md-6">
                    <!-- Form Group -->
                    <div class="js-form-message form-group">
                        <label class="form-label" for="signinSrPasswordExample2">Votre logo (Recommandé si vous êtes une entreprise)  @error('mobilemoney')

                            <small style="color:red">{{ $message}}</small>
                            @enderror</label></label>
                                                                <input type="file" class="form-control" name="logo" id="signinSrPasswordExample2" placeholder="Entrer votre numéro de téléphone"
                                                            >
                    </div>
                    <!-- End Form Group -->
            </div>



            </div>

            <div class="row">
                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader une photo @error('photo')

                    <small style="color:red">{{ $message}}</small>
                    @enderror</label>
                                                            <span class="text-danger">*</span>
                                </label>
                                <input type="file" class="form-control" name="photo"
                            ">
                </div>
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader votre carte nationale d'indidentité @error('cni')

                <small style="color:red">{{ $message}}</small>
                                @enderror</label>
                                                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="file" class="form-control" name="cni"  placeholder="Entrer votre nom"   >
                                </div>
                                <!-- End Form Group -->

                                        <!-- Form Group -->

                        <!-- End Form Group -->

            </div>
            <div class="row">
                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                    <label class="form-label" for="signinSrnomExample3">Uploader votre rib(si vous etes en dehors de l'Afrique) @error('rib')

                <small style="color:red">{{ $message}}</small>
                                @enderror</label>

                                    </label>
                                    <input type="file" class="form-control" name="rib"  placeholder="rib"   >
                                </div>
                                <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Adresse @error('house_piece')

                            <small style="color:red">{{ $message}}</small>
                            @enderror</label>
                                                        <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="adresse">
                        </div>
                        <!-- End Form Group -->

            </div>
<!-- Button -->
            <div class="mb-1">
                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">Finaliser mon  inscription</button>

                </div>

            </div>
            <!-- End Button -->
        </form>

     </div>

</div>
</div>

@endsection
