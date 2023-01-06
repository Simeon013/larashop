@section('title')
    Larashop - Editer Produit
@endsection
@extends('layouts.appadmin')
@section('content')
              <div class="row grid-margin">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Editer un produit</h4>

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

                      {!! Form::open(['action' => 'App\Http\Controllers\ProductController@updateproduct' , 'method' => 'POST' , 'class' => 'cmxform' , 'id' => 'commentForm' , 'enctype' => 'multipart/form-data']) !!}
                        {{ csrf_field() }}
                          <div class="form-group">
                            {!! Form::hidden('id', $product->id) !!}
                            {!! Form::label('', 'Nom du produit', ['for' => 'cname']) !!}
                            {!! Form::text('product_name', $product->product_name, ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Prix du produit', ['for' => 'cname']) !!}
                            {!! Form::number('product_price', $product->product_price, ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Categorie du produit', ['for' => 'cname']) !!}
                            {!! Form::select('product_category', $categories, $product->product_category, ['class' => 'form-control']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Image du produit', ['for' => 'cname']) !!}
                            {!! Form::file('product_image', ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                        {!!Form::close()!!}
                    </div>
                  </div>
                </div>
              </div>
@endsection

{{-- @section('scripts')
  <!-- Custom js for this page-->
  <script src="backoffice/js/form-validation.js"></script>
  <script src="backoffice/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->
@endsection --}}
