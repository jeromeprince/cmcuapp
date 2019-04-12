@extends('layouts.admin')

@section('title', 'CMCU | Liste des roles')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES ROLES</h1>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th>
                                <input type="checkbox" id="checkall">
                            </th>
                            <th>ROLE</th>
                            <th>EDITER</th>
                            <th>SUPPRIMER</th>
                            </thead>
                            <tbody>

                            @foreach ($roles as $role)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkthis">
                                    </td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-xs"><i class="far fa-edit"></i></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-primary btn-xs"><i class="far fa-eye"></i></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button type="button" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $roles->links() }}
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">Ajouter un role</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

@stop
