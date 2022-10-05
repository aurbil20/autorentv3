@extends('dashboard.layout')

@section('content')
    <div class="col-11 mx-auto">
        <h2 class="title-1 m-b-25 text-center">Les clients</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning bg-primary">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Inscrit le</th>
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
                                <button class="btn btn-primary"> Voir plus</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Supprimer ce utilisateur</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Il n'y a aucun client inscrit pour le moment</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection