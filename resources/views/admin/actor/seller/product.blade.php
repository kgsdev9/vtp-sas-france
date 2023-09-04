@extends('admin.apps.adminlayout')

@section('admin')





    <!-- mani page content body part -->
    <div id="main-content">

        <div class="container-fluid">

                @if($product_seller->count()> 0)

            <div class="row clearfix" style="margin-top:100px;">
                <div class="col-lg-12">
                    <div class="card product_item_list">
                        <div class="header">
                            <h2>Liste  Produits</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive"  >
                                <table class="table table-hover mb-0" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Pays</th>
                                                <th>Ville</th>
                                                <th>Prix</th>
                                                <th>Quantite</th>
                                                <th>Statut</th>



                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ( $product_seller  as  $seller_product)


                                        <tr>
                                            <td><a href="{{ asset('cover/'.$seller_product->cover_image)}}"><img src="{{ asset('cover/'.$seller_product->cover_image)}}" width="48" alt="Product img"></a> </td>
                                             <td>{{ Str::limit($seller_product->name, 10)}}</td>
                                            <td>{{$seller_product->country }}</td>
                                            <td>{{ $seller_product->city}}</td>
                                            <td>{{ $seller_product->price  }} €</td>
                                            <td>{{ $seller_product->quantity  }} </td>
                                            <td>
                                                @if($seller_product->statut=="disponible")
                                                <span class="badge badge-success bg-success text-white">Disponible</span>
                                                @elseif($seller_product->statut=="stock vide")
                                                <span class="badge badge-danger bg-danger text-white">Stock Vide</span>
                                                    @endif
                                            </td>



                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>

                                        {{ $product_seller->links() }}


                            </div>
                        </div>
                    </div>

                </div>


            </div>

                @else
                <br>
                <div class="row clearfix">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2> Chers Vendeur {{ Auth::user()->name}}  N'avez Aucun Produit Pour Le Moment </h2>
                            </div>
                            <div class="body">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#Home-withicon"><i class="fa fa-home"></i> Politique D'aout de produit </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Profile-withicon"><i class="fa fa-user"></i> Ajouter un Produit </a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Contact-withicon"><i class="fa fa-vcard"></i> Comprendre VTP</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="Home-withicon">
                                        <h6>Accueil</h6>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                    </div>
                                    <div class="tab-pane" id="Profile-withicon">
                                        <h6>Profile</h6>
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                    <div class="tab-pane" id="Contact-withicon">
                                        <h6>Contact</h6>
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>

                @endif
        </div>
    </div>


@endsection
