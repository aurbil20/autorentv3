@extends('dashboard.layout')

@section('content')
    <div class="col-11 mx-auto">
        <h2 class="title-1 m-b-25 text-center">Les administateurs</h2>
        <div class="py-3">
            <a href="" class="btn btn-primary">Ajouter un administrateur</a>
        </div>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning bg-primary">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Ajouté le</th>
                        <th>Nom </th>
                        <th>Prénom</th>
                        <th>Adresse mail</th>
                        <th>N° Téléphone </th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->numtel }}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#seeelement"> Voir plus</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to see more detail about admin -->
                        <div class="modal fade" id="seeelement" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Content not yet defined
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Vous êtes le seul administrateur</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
