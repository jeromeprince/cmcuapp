@extends('layouts.admin')

@section('title', 'CMCU | Liste des permission avec roles')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('partials.side_bar')

    <!-- Page Content Holder -->
    @include('partials.header')
    <!--// top-bar -->
        <div class="container">
            <h1 class="text-center">LISTE DES PERMISSIONS AVEC ROLES</h1>
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
                            <th>PERMISSION</th>
                            <th>ACTION</th>
                            </thead>
                            <tbody>

                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="checkthis">
                                    </td>
                                    <td>{{ $permission->display_name }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->description }}</td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                                            <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-primary btn-xs"><i class="far fa-show"></i></a>
                                        </p>
                                    </td>
                                    <td>
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button type="button" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix"></div>
                        {{ $permissions->links() }}
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="{{ route('permissions.create') }}" class="btn btn-primary">Ajouter une permission</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

@stop
