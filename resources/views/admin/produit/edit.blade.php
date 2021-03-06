@extends('layouts.admin') @section('title', 'CMCU | Modifier un produit') @section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">MODIFIER UN PRODUIT</h1>
            <hr>
            @include('partials.flash')
            <div class="col-md-6">
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
                    <label for="quantity">QUANTITE STOCK:</label>
                    <input type="text" class="form-control" name="quantite_stock" value={{ $produit->quantite_stock }} />
                </div>
                <div class="form-group">
                    <label for="quantity">QUANTITE ALERTE:</label>
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
    </div>
    </body>
@endsection
