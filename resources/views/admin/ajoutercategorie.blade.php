@section('title')
    Larashop - Ajout Catégorie
@endsection
@extends('layouts.appadmin')
@section('content')
              <div class="row grid-margin">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Ajouter une catégorie</h4>

                      {!! Form::open(['action' => 'App\Http\Controllers\CategoryController@savecategory' , 'method' => 'POST' , 'class' => 'cmxform' , 'id' => 'commentForm']) !!}
                        {{ csrf_field() }}
                          <div class="form-group">
                            {!! Form::label('', 'Nom de la catégorie', ['for' => 'cname']) !!}
                            {!! Form::text('category_name', '', ['class' => 'form-control' , 'id' => 'cname']) !!}
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
