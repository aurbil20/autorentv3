@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Tous les véhcules disponibles</h3>
            </div>
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Agence </th>
                            <th scope="col">Marque </th>
                            <th scope="col">Modèle </th>
                            <th scope="col">Immatricule </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agences as $agence)
                            @foreach ($vehicules as $vehicule)
                                @if ($vehicule->agence_id == $agence->id)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="125px">
                                        </td>
                                        <td>{{ $agence->name }}</td>
                                        <td>
                                            @foreach ($marques as $marque)
                                                @foreach ($modeles as $modele)
                                                    @if ($modele->id == $vehicule->modele_vehicule_id && $marque->id == $modele->marque_vehicule_id)
                                                        {{ $marque->name }}
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($modeles as $modele)
                                                @if ($modele->id == $vehicule->modele_vehicule_id)
                                                    {{ $modele->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td> {{ $vehicule->modele_vehicule_id }}</td>
                                        <td>
                                            <button class="btn btn-primary"> Voir plus</button>
                                            <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Signaler en panne</a>
                                                <a class="dropdown-item" href="#">Supprimer</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
