@extends('dashboard.layout')

@section('content')
    <div class=" text-center py-2">
        <h3>Changez l'état d'un véhicule</h3>
    </div>
    <form action="">
        @csrf
        <div class="col-11 bg-light rounded mx-auto py-3">
            <div class="row p-4 ">
                <div class="col-md-5 py-2">
                    <label for="">Sélectionner le département </label>
                    <select class="form-control" name="">
                        <option value="null">Département</option>
                    </select>
                </div>
                <div class="col-md-5 py-2">
                    <label for="">Sélectionner la commune </label>
                    <select class="form-control" name="">
                        <option value="null">Commune</option>
                    </select>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Sélectionner l'agence où se trouve le véhicule</label>
                    <select class="form-control" name="">
                        <option value="null">Agence</option>
                    </select>
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Sélectionner l'immatriculation : </label>
                    <select class="form-control" name="">
                        <option value="null">Immatriculation</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 py-2">
                <hr>
            </div>
            <div class="row m-1">
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
                                <th scope="col">Ancien status</th>
                                <th scope="col">Nouveau status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td><img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="125px"></td>
                                <td>Agence - Ville - Commune </td>
                                <td>Toyota</td>
                                <td>Fortuner</td>
                                <td>BX 0000 </td>
                                <td>En panne </td>
                                <td>
                                    <select class="form-control" name="" id="">
                                        <option value="">Etat 1</option>
                                        <option value="">Etat 2</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
                <div class="col-md-12 py-1">
                    <hr>
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">Changez l'état</button>
                </div>
            </div>
        </div>
    </form>
@endsection
