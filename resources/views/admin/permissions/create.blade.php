@extends('layouts.admin')

@section('title', 'CMCU | Ajouter un utilisateur')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
        <div class="container">
            <h1 class="text-center">AJOUTER UNE PERMISSION</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form class="" method="POST" action="{{ route('permissions.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nom de la permission</label>
                            <input type="text" class="form-control" name="name" value="" placeholder="Nom de la permission"> <span class="form-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="display_name" class="col-form-label">Nom d'affichage</label>
                            <input type="text" class="form-control" name="display_name" value="" placeholder="Nom d'affichage"> <span class="form-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="" placeholder="Description"> <span class="form-text"></span>
                        </div>
                        <div class="row">
                            <button type="submit" value="login" name="submit" class="btn btn-primary btn-lg">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </body>

@stop
