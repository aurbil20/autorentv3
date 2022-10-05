@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Les véhicules</h3>
            </div>
            <div>
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
                                <th scope="col">Immatriculation </th>
                                <th scope="col">Status</th>
                                <th scope="col">Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($vehicules as $vehicule)
                                @foreach ($agences as $agence)
                                    @if ($vehicule->agence_id == $agence->id)
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>
                                                <img src="{{ asset('img/iconpublicpage.png') }}" alt=""
                                                    width="125px">
                                            </td>
                                            <td>{{ $agence->name }}</td>
                                            <td>
                                                @foreach ($modeles as $modele)
                                                    @if ($modele->id == $vehicule->modele_vehicule_id)
                                                        {{ $modele->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($marques as $marque)
                                                    @foreach ($modeles as $modele)
                                                        @if ($modele->id == $vehicule->modele_vehicule_id && $marque->id == $modele->marque_vehicule_id)
                                                            {{ $marque->name }}
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </td>
                                            <td> {{ $vehicule->immatriculation }}</td>
                                            <td> {{ $vehicule->etat }}</td>
                                            <td>
                                                <button class="btn btn-primary" type="button" data-toggle="modal"
                                                    data-target="#{{ $vehicule->id }}-modal"> Voir plus</button>
                                                <button class="btn btn-primary" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="fa fa-ellipsis-v"
                                                        aria-hidden="true"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Signaler en panne</a>
                                                    <a class="dropdown-item" href="#">Supprimer</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal of details_vehicules-->
                                        <div class="modal fade" id="{{ $vehicule->id }}-modal" data-backdrop="static"
                                            data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Plus de détails sur ce véhicules</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container px-4 px-lg-5 my-5">
                                                            <div class="row gx-4 gx-lg-5 align-items-center">
                                                                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                                                                        src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg"
                                                                        alt="..." /></div>
                                                                <div class="col-md-6">
                                                                    <div class="small mb-1">SKU: BST-498</div>
                                                                    <h1 class="display-5 fw-bolder">Shop item </h1>
                                                                    <p class="lead">Lorem ipsum dolor sit amet consectetur
                                                                        adipisicing
                                                                        elit. Praesentium at dolorem quidem modi. Nam sequi
                                                                        consequatur
                                                                        obcaecati excepturi alias magni, accusamus eius
                                                                        blanditiis delectus
                                                                        ipsam minima ea iste laborum vero?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Annuler</button>
                                                        <button type="button" class="btn btn-primary">Modifier les details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @empty
                                <tr>
                                    <td class="text-center" colspan="8">Aucun véhicule pour le moment</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>

        </div>
    </div>
@endsection
