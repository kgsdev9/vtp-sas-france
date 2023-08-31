@extends('layout.app')
@section('content')



<div class="main-container">
    @can('seller_account_update')
    <div class="container">
        <div class="row">
            @include('dashboard.slide-bar')
            <!--/.page-sidebar-->

            <div class="col-md-9 page-content">
                <div class="inner-box">
                    <h2 class="title-2"><i class="icon-docs"></i>Mes Annonces </h2>

                    <div class="table-responsive">

                        <table id="addManageTable" class="table table-striped table-bordered add-manage-table table demo footable-loaded footable" data-filter="#filter" data-filter-text-only="true">
                            <thead>
                            <tr>

                                <th> Photo</th>
                                <th data-sort-ignore="true">Detail de l'annonce</th>
                                <th data-type="numeric"> Price</th>
                                <th> Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $product_product as  $product_products )
                            <tr>

                                <td style="width:14%" class="add-img-td"><a href="#">
                                    <img class="thumbnail  img-responsive" src="{{asset('cover/'.$product_products->cover_image)}}" alt="img"></a></td>
                                <td style="width:58%" class="ads-details-td">
                                    <div>
                                        <p><strong> <a href="#"> {{$product_products->name}}
                                          </a> </strong></p>

                                        <p><strong> Posté le   </strong>:
                                            {{$product_products->created_at}} </p>

                                        <p><strong>Provenance  </strong>: {{$product_products->country}} <strong> {{$product_products->city}} </strong>
                                        </p>
                                    </div>
                                </td>
                                <td style="width:16%" class="price-td">
                                    <div><strong> {{$product_products->price}} € </strong></div>
                                </td>
                                <td style="width:10%" class="action-td">
                                    <div>
                                        <p><a class="btn btn-primary btn-sm" href="{{ route('edit.product', $product_products->id) }}"> <i class="fa fa-edit"></i> Edit </a>
                                        </p>

                                        <p><a class="btn btn-info btn-sm" href="{{ route('edit.product', $product_products->id) }}"> <i class="fa fa-eye"></i> Detail
                                        </a></p>

                                        <p><a class="btn btn-danger btn-sm"> <i class=" fa fa-trash"></i> Delete
                                        </a></p>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--/.row-box End-->

                </div>
            </div>
            <!--/.page-content-->
        </div>
        <!--/.row-->
    </div>

    @elsecan('seller_account_create')

    <div class="card md-3" style="margin-top: 30px">


        <div class="card-body">
          <h4 class="text-danger"> veuillez renseigner vos informations Annonceur svp !    </h4>  <span> <a href="{{route('seller.register.form')}}">cliquez ici</a> </span>
        </div>

      </div>
      @endcan
    <!--/.container-->
</div>

@endsection
