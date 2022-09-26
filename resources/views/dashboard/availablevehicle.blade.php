@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Tous les véhcules disponibles</h3>
            </div>
            <div class="col-md-8 ">
                <div class="row gap-3">
                    <div class="col ">
                        <form>
                            <div class="d-flex py-2">
                                <div class="px-2">
                                    <label for="exampleFormControlSelect1">Trier par agence : </label>
                                </div>
                                <div class="px-2">
                                    <select class="form-control">
                                        <option>Toutes les agences</option>
                                        <option>Agence 1 - Ville 1 - Département 1</option>
                                    </select>
                                </div>
                                <div class="px-2">
                                    <button class="btn btn-primary"> Trier </button>
                                </div>  
                            </div>
                        </form>
                    </div>



                </div>
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
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="125px"></td>
                            <td>Agence - Ville - Commune </td>
                            <td>Toyota</td>
                            <td>Fortuner</td>
                            <td>BX 0000 </td>
                            <td>
                                <button class="btn btn-primary"> Voir plus</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Signaler en panne</a>
                                    <a class="dropdown-item" href="#">Supprimer</a>
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
