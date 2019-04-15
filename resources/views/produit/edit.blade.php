@extends('layouts.layoutP')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
           <h2>EDITER LE PRODUIT</h2>
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
            <form method="post" action="{{ route('produit.update', $produit->id) }}">
                @method('PATCH')
                @csrf
              <div class="form-group">
                    <label for="name">designation:</label>
                    <input type="text" class="form-control" name="designation" value={{ $produit->designation }} />
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">CATEGORIE</label>
                <select class="form-control" name="categorie"  id="exampleFormControlSelect1">
                    <option >Pharmaceutique</option>
                    <option>Materiel</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="quantity">QUANTITE_STOCK:</label>
                    <input type="text" class="form-control" name="quantite_stock" value={{ $produit->quantite_stock }} />
                </div>
                <div class="form-group">
                    <label for="quantity">QUANTITE_ALERTE:</label>
                    <input type="text" class="form-control" name="quantite_alerte" value={{ $produit->quantite_alerte }} />
                </div>
                
                <div class="form-group">
                    <label for="quantity">PRIX:</label>
                    <input type="text" class="form-control" name="prix_unitaire" value={{ $produit->prix_unitaire }} />
                </div>
               <button type="submit" class="btn btn-primary">MODIFIER</button>
            </form>
        </div>
    </div>
@endsection
