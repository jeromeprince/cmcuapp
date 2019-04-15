@extends('layouts.layoutP')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif

 <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>designation</td>
                <td>categorie</td>
                <td>quantite_stock</td>
                <td>quantite_alerte</td>
                <td>prix_unitaire</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($produit as $produit)
                <tr>
                    <td>{{$produit->id}}</td>
                    <td>{{$produit->designation}}</td>
                    <td>{{$produit->categorie}}</td>
                    <td>{{$produit->quantite_stock}}</td>
                     <td>{{$produit->quantite_alerte}}</td>
                     <td>{{$produit->prix_unitaire}}</td>
                    <td><a href="{{ route('produit.edit',$produit->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('produit.destroy', $produit->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
    <div class="modal-footer ">
        <a href="{{ route('produit.create') }}" class="btn badge-primary " style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;AJOUTER UN PRODUIT</a>
    </div>
    </div>

@endsection
