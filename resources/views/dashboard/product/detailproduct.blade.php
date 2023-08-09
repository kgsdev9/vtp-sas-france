@extends('layout.app')
@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
       
                @include('dashboard.slide-bar')
          
            <!--/.page-sidebar-->

            <div class="col-md-9 page-content">
                <div class="inner-box">
                    <h2 class="title-2"><i class="icon-docs"></i>Information sur le produit  </h2>

                    <div class="table-responsive">
                        <div class="table-action">
                           <div class="row">
                            <div class="col-md-3">
                                <img class="w-100 rounded-top" src="{{asset('cover/'.$product->cover_image)}}" alt="" style="height:200px">

                            </div>
                            <div class="col-md-3">
                                <img class="w-100 rounded-top" src="{{asset('images/'.$product->img_two)}}" alt="" style="height:200px">

                            </div>

                            <div class="col-md-3">
                                <img class="w-100 rounded-top" src="{{asset('images/'.$product->img_three)}}" alt="" style="height:200px">

                            </div>
                            <div class="col-md-3">
                                <img class="w-100 rounded-top" src="{{asset('images/'.$product->img_for)}}" alt="" style="height:200px">

                            </div>
                            </div> 

                           
                        </div>
                        <div class="Ads-Details">
                            <h5 class="list-title"><strong>{{$product->name }} </strong></h5>

                            <div class="row">
                                <div class="ads-details-info col-md-8">
                                    <p> {{$product->description }} </p>
                                 
                                  
                                  
                                </div>
                                <div class="col-md-4">
                                    <aside class="panel panel-body panel-details">
                                        <ul>
                                            <li>
                                                <p class=" no-margin "><strong>Prix:</strong> {{$product->price }}€ </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Catégorie:</strong>{{$product->category->name }}</p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Localisation :</strong> {{$product->country}}  {{$product->city}}</p>
                                            </li>
                                          
                                            <li>
                                                <p class="no-margin"><strong>Quantité:</strong> {{$product->quantity }}</p>
                                            </li>
                                        </ul>
                                    </aside>
                                    
                                </div>
                            </div>
                            <div class="content-footer text-left">
                                <a class="btn  btn-default" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-edit"></i> Modifier </a>

                                <button onclick="history.back()" class="btn btn-info"> <i class="fa fa-angle-left"></i> Retourner</button>

                                
                                
                                </div>
                        </div>
                    </div>
                    <!--/.row-box End-->

                </div>
            </div>
            <!--/.page-content-->
        </div>
        <!--/.row-->
    </div> 
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nom du produt </label>
                                <input type="text" class="form-control"  name="name" value="{{$product->name }}">
                            </div>
                        </div>


                      

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Statut  actuelle:  {{  $product->statut}} </label>
                                <select name="statut" id="" class="form-control">
                                    <option value="disponible">disponible</option>
                                    <option value="stock vide ">indisponible</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Prix Du Produit </label>
                                <input type="text" class="form-control"  name="price" value="{{ $product->price }}">
                            </div>
                        </div>



                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Quantite Du produit  </label>
                                <input type="number" class="form-control"  name="quantity" value="{{ $product->quantity }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image 1 </label>
                                <input type="file" class="form-control" name="first_image" value="{{$product->cover_image}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image 2</label>
                                <input type="file" class="form-control" name="image_two" value="{{$product->img_two}}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image 3</label>
                                <input type="file" class="form-control" name="image_three" value="{{$product->img_three}}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Image 4</label>
                                <input type="file" class="form-control" name="image_for" value="{{$product->img_for}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Catégorie   </label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="{{$product->category->id }}">{{ $product->category->name }}</option>
                                    @foreach ($categories as $c)
                                    @if (strcmp($product->category->name, $c->name)!=0)
                                    <option value="{{ $c->id}}">{{ $c->name }}</option>
                                    @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Description du produit </label>
                                <textarea  id="" cols="20" rows="5" class="form-control" name="description">{{ $product->description }}</textarea>

                            </div>

                        </div>


       </div>
  
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enregistrer les modifications </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Fermer </button>

        </div>
    </form>
      </div>
    </div>
  </div>

    <!--/.container-->
</div>



@endsection
