@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Demandes de paiement éffectuées </h3>
            </div>
            <div class="col-md-8 ">
            </div>
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date de versement</th>
                            <th scope="col">Date de demande</th>
                            <th scope="col">Nom de l'entreprise</th>
                            <th scope="col">Solde demandé </th> 
                            <th scope="col">Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>2022 - 09 -10 12:00 </td>
                            <td>2022 - 09 -10 12:00 </td>
                            <td>Agence - lorem </td>
                            <td>150$</td>
                            <td>
                                <button class="btn btn-primary">Voir plus</button>
                            </td>
                            <!--To do Modal-->
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
