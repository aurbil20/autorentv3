@extends('dashboard.layout')

@section('content')
    <div class="col-12 mx-auto">
        <h2 class="title-1 m-b-25 text-center">Les entreprises</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning bg-primary">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Inscrite le</th>
                        <th>Nom </th>
                        <th>Balance </th>
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
                            <td>{{ $user->solde }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->numtel }}</td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#seeenterprise"> Voir plus</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Modifier ce compte</a>
                                    <a class="dropdown-item" href="#">Supprimer ce compte</a>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal to see more detail about admin -->
                        <div class="modal fade" id="seeenterprise" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{  $user->name }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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