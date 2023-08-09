@extends('dashboard.layout.app')

@section('main')
<hr>
<div id="main-content" style="margin-top: 6%">

    <div class="container-fluid">
                                   <!-- Form Group -->
                                   <form class="js-validate" novalidate="novalidate" method="POST" action="{{route('carrier.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                            <!-- Form Group -->
                                            <div class="js-form-message form-group col-md-6">
                                                <label class="form-label" for="signinSrnomExample3">Nom de l'entreprise  @error('sirname')

                                            <small style="color:red">{{ $message}}</small>
                                                            @enderror</label>
                                                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" name="sirname"  placeholder="Nom de l'entreprise" value="{{old('sirname')}}">
                                                            </div>
                                                            <!-- End Form Group -->

                                                                    <!-- Form Group -->
                                                                    <div class="js-form-message form-group col-md-6">
                                                                        <label class="form-label" for="signinSrnomExample3">Nom et prénom du titulaire de l'entreprise @error('firstname')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                                                                    <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="firstname"  placeholder="Entrer votre Nom & Prénom" value="{{old('firstname')}}">
                                                    </div>
                                                    <!-- End Form Group -->

                                    </div>




                                    <div class="row">
                                        <div class="col-md-6">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label class="form-label" for="signinSrPasswordExample2">Entrer Numéro de télephone (01) <span class="text-danger">*</span>  @error('phonenumber')

                                                        <small style="color:red">{{ $message}}</small>
                                                        @enderror</label></label>
                                                                                            <input type="number" class="form-control" name="phonenumber" id="signinSrPasswordExample2" placeholder=" Numéro de téléphone" aria-label="Password"
                                                                                        >
                                                </div>
                                                <!-- End Form Group -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Form Group -->
                                            <div class="js-form-message form-group">
                                                <label class="form-label" for="signinSrPasswordExample2">Entrer Numéro de télephone (02)  <span class="text-danger">*</span>  @error('seller_phonenumber')

                                                    <small style="color:red">{{ $message}}</small>
                                                    @enderror</label></label>
                                                                                        <input type="number" class="form-control" name="seller_phonenumber" id="signinSrPasswordExample2" placeholder="Numéro de téléphone" aria-label="Password"
                                                                                    >
                                            </div>
                                            <!-- End Form Group -->
                                            <!-- End Form Group -->
                                        </div>
                                    </div>









                                    <!-- Form Group -->
                                    <div class="js-form-message form-group">
                                        <label class="form-label" for="signinSrPasswordExample2">Adresse de l'entreprise <span class="text-danger">*</span>  @error('address_payment')

                                                            <small style="color:red">{{ $message}}</small>
                                                            @enderror</label></label>
                                                            <input type="text" class="form-control" name="address_payment" id="signinSrPasswordExample2" placeholder=" " aria-label="Password"
                                       >
                                    </div>
                                    <!-- End Form Group -->


                                    <div class="js-form-message form-group ">
                                        <label class="form-label" for="signinSrnomExample3">Uploader votre lien de site web (ce champs est facultatif ) @error('website')

                                    <small style="color:red">{{ $message}}</small>
                                                    @enderror</label>
                                                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="website"  placeholder="Url du site"   >
                                                    </div>


            <!-- End Form Group -->



                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Entrer de rib de réception des prestations @error('kibs')

                                            <small style="color:red">{{ $message}}</small>
                                            @enderror</label>
                                                                                    <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" name="kibs" value="{{old('kibs')}}">
                                        </div>
                                        <div class="js-form-message form-group col-md-6">
                                            <label class="form-label" for="signinSrnomExample3">Uploader votre logo (ce champs est facultatif ) @error('logo')

                                        <small style="color:red">{{ $message}}</small>
                                                        @enderror</label>
                                                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" name="logo"  placeholder="Entrer votre nom"   >
                                                        </div>
                                                        <!-- End Form Group -->

                                                                <!-- Form Group -->

                                                <!-- End Form Group -->

                                    </div>







                                    <!-- Button -->
                                    <div class="mb-1">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary px-5">Finaliser mon  inscription</button>
                                        </div>

                                    </div>
                                    <!-- End Button -->
                                </form>

     </div>

</div>
</div>


@endsection
