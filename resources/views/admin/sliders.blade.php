@section('title')
    Larashop - Sliders
@endsection
{!! Form::hidden('',$increment=1) !!}
@extends('layouts.appadmin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des Sliders</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Order #</th>
                    <th>Image</th>
                    <th>Description One</th>
                    <th>Description Two</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                    <tr>
                        <td>{{$increment}}</td>
                        <td><img src="/storage/slider_images/{{$slider->slider_image}}" alt=""></td>
                        <td>{{$slider->description1}}</td>
                        <td>{{$slider->description2}}</td>
                        <td>
                            @if ($slider->status)
                                <label class="badge badge-success">Activé</label>
                            @else
                                <label class="badge badge-danger">Désactivé</label>
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-outline-primary" onclick="window.location ='{{URL('/editslider/'.$slider->id)}}'">Editer</button>
                            <button class="btn btn-outline-danger"><a href="{{('/deleteslider/'.$slider->id)}}" id="delete">Supprimer</a></button>

                            @if ($slider->status == 1)
                                <button class="btn btn-outline-warning" onclick="window.location ='{{URL('/desactiverslider/'.$slider->id)}}'">Désactiver</button>
                            @else
                                <button class="btn btn-outline-success" onclick="window.location ='{{URL('/activerslider/'.$slider->id)}}'">Activer</button>
                            @endif
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
    {{-- <script src="backoffice/js/data-table.js"></script> --}}
@endsection
