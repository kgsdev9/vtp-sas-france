
@extends('admin.apps.adminlayout')

@section('admin')

<div id="main-content">
    <div class="container-fluid">

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Liste De Vos Commandes</h2>
                <ul class="header-dropdown">


                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nom Et Prenom  </th>
                                <th>Quantite</th>
                                <th>Montant </th>
                                <th>Telephone</th>
                                <th>N° de la commade</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ( $order as $c)
                                <tr>
                                    <td>{{$c->fullname}}</td>
                                <td>{{$c->quantity}}  </td>

                                <td> {{$c->amount}} €</td>
                                <td>{{$c->phone}} </td>
                                <td> {{$c->code}}</td>
                                <td>
                                    <a  class="btn btn-primary" href="{{route('order.detail.admin', $c->id)}}"><i class="fa fa-eye"></i></a>
                                </td>
                                </tr>
                                @endforeach
                            </tr>











                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>



@endsection












