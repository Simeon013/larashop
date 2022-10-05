@section('title')
    Larashop - Produits
@endsection
@extends('layouts.appadmin')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Liste des produits</h4>
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
                <tr>
                    <td>1</td>
                    <td>Alimentaire</td>
                    <td>Alimentaire</td>
                    <td>Alimentaire</td>
                    <td>Alimentaire</td>
                    <td>
                      <label class="badge badge-info">On hold</label>
                    </td>
                    <td>
                        <button class="btn btn-outline-primary">Editer</button>
                        <button class="btn btn-outline-danger">Supprimer</button>
                    </td>
                </tr>
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
