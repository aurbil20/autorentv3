@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Supprimer un véhicule</h3>
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
                            <th scope="col">Status </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agences as $agence)
                            @foreach ($vehicules as $vehicule)
                                @if ($vehicule->agence_id == $agence->id)
                                    <tr>
                                        <td scope="row">1</td>
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
                                        <td> {{ $vehicule->etat }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#{{ $vehicule->id }}-modal">Supprimer</button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="{{ $vehicule->id }}-modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Supression</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Voulez vous réellement supprimer ce véhicule ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Non</button>
                                                    <a type="button" class="btn btn-primary" href="{{ Route('dashboard-delvehicleid',['id' => $vehicule->id]) }}">Oui </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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


