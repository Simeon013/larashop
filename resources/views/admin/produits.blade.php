@section('title')
    Larashop - Produits
@endsection
{!! Form::hidden('',$increment=1) !!}
@extends('layouts.appadmin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des produits</h4>

        @if (Session::has('status'))
            <div class="alert alert-success">
                {{Session::get('status')}}
            </div>
        @endif

        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Order #</th>
                    <th>Image</th>
                    <th>Nom du produit</th>
                    <th>Catégorie du produit</th>
                    <th>Prix</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td>{{$increment}}</td>
                        <td><img src="/storage/product_images/{{$product->product_image}}" alt=""></td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_category}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>
                            @if ($product->status)
                                <label class="badge badge-success">En stock</label>
                            @else
                                <label class="badge badge-danger">Sold out</label>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-outline-primary" onclick="window.location ='{{URL('/editproduct/'.$product->id)}}'">Editer</button>
                            <button class="btn btn-outline-danger"><a href="{{('/deleteproduct/'.$product->id)}}" id="delete">Supprimer</a></button>
                          </td>
                    </tr>
                    {!! Form::hidden('', $increment= $increment+1) !!}
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
    <script src="backoffice/js/data-table.js"></script>
@endsection
