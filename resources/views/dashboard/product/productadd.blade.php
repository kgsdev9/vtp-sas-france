@extends('layout.app')

@section('content')



<div class="main-container">
    @can('seller_account_update')
    <div class="container">
        <div class="row">
            <div class="col-md-9 page-content">
                <div class="inner-box category-content">
                    <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Créer votre annonce 
                       </strong></h2>

                    <div class="row">
                        <div class="col-sm-12">

                            <form class="form-horizontal form-post-ads" method="POST" action="{{route('create.product')}}"   enctype="multipart/form-data">
                             @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-8">
                                        <select name="category_id" id="category-group" class="form-control">
                                           @foreach ($cate as $value)
                                           <option value="{{$value->id}}">{{ $value->name }}</option>
                                           @endforeach
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">Statut de l'annonce</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="statut" id="inlineRadio1" value="disponible" required> Disponible
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="statut" id="inlineRadio2" value="stock vide" required> Indisponible
                                            </label>
                                        </div>


                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Titre de l'annonce  @error('name')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name" placeholder="Entrer le  nom  du produit" value="{{old('name')}}" required>
                                        <small id="" class="form-text text-muted">
                                           le titre de doit pas depasser 60 caractéres
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Quantité du produit     @error('quantiy')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label> </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="quantity" id="Adtitle" placeholder="4" value="{{ old('quantity') }}">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Prix     @error('price')
                                        <small style="color: red" >{{$message}}</small>
                                        @enderror
                                      </label></label>

                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">€</span>
                                            <input type="text" name="price" class="form-control" placeholder="valeur en Euro"  value="{{old('price')}}" required>
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>


                                    
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Description </label>
                                    <div class="col-sm-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10" required> {{ old('description') }}</textarea>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="textarea">Image</label>
                                    <div class="col-lg-8">
                                        <div class="mb10">
                                 <span class="file-input file-input-new">
                                    <input type="file" name="first_image" class="form-control" required>
                                    
                                </span>

                                <span class="file-input file-input-new">
                                    <input type="file" name="two_image"    class="form-control" placeholder="" required>
                                    
                                </span>

                                <span class="file-input file-input-new">
                                    <input type="file" name="three_image"    class="form-control" placeholder="" required>
                                    
                                </span>

                                <span class="file-input file-input-new">
                                    <input type="file" name="for_image"    class="form-control" placeholder="" required>
                                    
                                </span>
                                        </div>
                                                                         
                                      
                                        <p class="form-text text-muted">
                                            Ajoutez jusqu'à 4 photos. Utilisez une image réelle de votre produit, pas des catalogues
                                        </p>
                                    </div>
                                </div>
                                <!-- Button  -->
                                <div class="form-group row">

                                    <div class="col-sm-8">

                                        <button type="submit" class="btn btn-success btn-lg">Enregistret et publier l'annonce</button>
                                      
                                    
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.page-content -->

            <div class="col-md-3 reg-sidebar">
                <div class="reg-sidebar-inner text-center">
                    <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                        <h3><strong>Post a Free Classified</strong></h3>

                        <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. </p>
                    </div>

                    <div class="card sidebar-card">
                        <div class="card-header uppercase">
                            <small><strong>How to sell quickly?</strong></small>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-left">
                                <ul class="list-check">
                                    <li> Use a brief title and description of the item</li>
                                    <li> Make sure you post in the correct category</li>
                                    <li> Add nice photos to your ad</li>
                                    <li> Put a reasonable price</li>
                                    <li> Check the item before publish</li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--/.reg-sidebar-->
        </div>
        <!-- /.row -->
    </div>

    @elsecan('seller_account_create')
    <div class="card md-3" style="margin-top: 30px">


        <div class="card-body">
          <h4 class="text-danger"> veuillez renseigner vos informations Annonceur svp !    </h4>  <span> <a href="{{route('seller.register.form')}}">cliquez ici</a> </span>
        </div>

      </div>
      @endcan
          <!-- /.container -->
</div>



 @endsection
