@section('title')
    Larashop - Ajout Produit
@endsection
@extends('layouts.appadmin')
@section('content')
              <div class="row grid-margin">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Ajouter un produit</h4>

                      {!! Form::open(['action' => 'App\Http\Controllers\ProductController@saveproduct' , 'method' => 'POST' , 'class' => 'cmxform' , 'id' => 'commentForm']) !!}
                        {{ csrf_field() }}
                          <div class="form-group">
                            {!! Form::label('', 'Nom du produit', ['for' => 'cname']) !!}
                            {!! Form::text('product_name', '', ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Prix du produit', ['for' => 'cname']) !!}
                            {!! Form::number('product_price', '', ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Categorie du produit', ['for' => 'cname']) !!}
                            {{-- {!! Form::select('product_categorie', $categories, null, ['placeholder' => 'Select Category' , 'class' => 'form-control']) !!} --}}
                          </div>
                          <div class="form-group">
                            {!! Form::label('', 'Image du produit', ['for' => 'cname']) !!}
                            {!! Form::file('product_image', ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}
                        {!!Form::close()!!}
                    </div>
                  </div>
                </div>
              </div>
@endsection

@section('scripts')
  <!-- Custom js for this page-->
  <script src="backoffice/js/form-validation.js"></script>
  <script src="backoffice/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->
@endsection
