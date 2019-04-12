@extends('layouts.admin')

@section('title', 'CMCU | Modifier une permission')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
        @include('partials.header')
        <div class="container">
            <h1 class="text-center">MODIFIER UNE PERMISSION</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form class="" method="POST" action="{{ route('permissions.update', $permission->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nom de la permission</label>
                            <input type="text" class="form-control" name="name" value="{{ $permission->name }}" placeholder="Nom de la permission"> <span class="form-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="display_name" class="col-form-label">Nom d'affichage</label>
                            <input type="text" class="form-control" name="display_name" value="{{ $permission->display_name }}" placeholder="Nom d'affichage"> <span class="form-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <input type="text" class="form-control" name="description" value="{{ $permission->description }}" placeholder="Description"> <span class="form-text"></span>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </body>

@stop
