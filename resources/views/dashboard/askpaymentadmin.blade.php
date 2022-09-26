@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Demandes de paiement en instance </h3>
            </div>
            <div class="col-md-8 ">
            </div>
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th>Date de demande </th>
                            <th scope="col">Nom de l'entreprise</th>
                            <th scope="col">Solde à envoyer </th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            
                            <td>2022 - 09 -10 12:00 </td>
                            <td>Agence - lorem </td>
                            <td>150$</td>
                            <td>
                                <button class="btn btn-primary">Accepter</button>
                                <button class="btn btn-primary">Refuser</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Voir plus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
