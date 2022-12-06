@section('title')
    Larashop - Modifier Catégorie
@endsection
@extends('layouts.appadmin')
@section('content')
              <div class="row grid-margin">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Modifier une catégorie</h4>

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

                      {!! Form::open(['action' => 'App\Http\Controllers\CategoryController@updatecategory' , 'method' => 'POST' , 'class' => 'cmxform' , 'id' => 'commentForm']) !!}
                        {{ csrf_field() }}
                          <div class="form-group">
                            {!! Form::hidden('id',$categorie->id) !!}
                            {!! Form::label('', 'Nom de la catégorie', ['for' => 'cname']) !!}
                            {!! Form::text('category_name', $categorie->category_name, ['class' => 'form-control' , 'id' => 'cname']) !!}
                          </div>
                          {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                        {!!Form::close()!!}
                    </div>
                  </div>
                </div>
              </div>
@endsection

@section('scripts')
  <!-- Custom js for this page-->
  {{-- <script src="backoffice/js/form-validation.js"></script>
  <script src="backoffice/js/bt-maxLength.js"></script> --}}
  <!-- End custom js for this page-->
@endsection
