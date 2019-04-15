@extends('layouts.layoutP')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   <h2> AJOUTER UN PRODUIT </h2>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('produit.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">DESIGNATION:</label>
              <input type="text" class="form-control" name="designation"/>
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">CATEGORIE</label>
              <select class="form-control" name="categorie" id="exampleFormControlSelect1">
                  <option>pharmaceutique</option>
                  <option>materiel</option>

              </select>
              <div class="form-group">
              <label for="price">QUANTITE STOCK :</label>
              <input type="text" class="form-control" name="quantite_stock"/>
          </div>
          </div>
          <div class="form-group">
              <label for="price">QUANTITE ALERTE :</label>
              <input type="text" class="form-control" name="quantite_alerte"/>
          </div>
         <div class="form-group">
              <label for="quantity">PRIX:</label>
              <input type="text" class="form-control" name="prix_unitaire"/>
          </div>
          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
      </form>
  </div>
</div>
@endsection
