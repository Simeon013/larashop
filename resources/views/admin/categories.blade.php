@section('title')
    Larashop - Catégories
@endsection
{!! Form::hidden('',$increment=1) !!}
@extends('layouts.appadmin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des catégories</h4>
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
                    <th>Nom de la catégorie</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$increment}}</td>
                    <td>{{$category->category_name}}</td>
                    {{-- <td>
                      <label class="badge badge-info">On hold</label>
                    </td> --}}
                    <td>
                      <button class="btn btn-outline-primary" onclick="window.location ='{{URL('/editcategory/'.$category->id)}}'">Editer</button>
                      <button class="btn btn-outline-danger"><a href="{{('/deletecategory/'.$category->id)}}" id="delete">Supprimer</a></button>
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
