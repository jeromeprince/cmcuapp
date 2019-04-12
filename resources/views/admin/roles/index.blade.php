@extends('admin.layouts.admin_template')

@section('title', 'CMCU | Liste des roles')

@section('content')

    <body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
    @include('admin.partials.side_bar')

    <!-- Page Content Holder -->
    @include('admin.partials.header')
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
                                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                                            <button type="button" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
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
                        <input type="submit" class="btn btn-primary" value="Ajouter un role" data-title="Ajouter" data-toggle="modal" data-target="#ajouter">
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="ajouter" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                            <h4 class="modal-title custom_align" id="Heading">Ajouter un role</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <input name="roles" rows="2" class="form-control" placeholder="Nouveau role">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-primary btn-xs" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Ajouter</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-xs" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Annulé</a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                        <h4 class="modal-title custom_align" id="Heading">Effacer cette entrée !!!!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Vous allez supprimer un role veuillez confirmer votre choix !</div>
                    </div>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>&#xA0;Confirmer</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>&#xA0;Annulé</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    </div>
    </body>

@stop
