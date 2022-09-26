@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Toutes les agences </h3>
            </div>
            <div class="col-md-8 ">
                <div class="row gap-3">
                    <div class="col ">
                        <form>
                            <div class="d-flex py-2">
                                <div class="px-2">
                                    <label for="exampleFormControlSelect1">Trier par : </label>
                                </div>
                                <div class="px-2">
                                    <select class="form-control">
                                        <option>Tous les départements</option>
                                        <option>Département 1</option>
                                    </select>
                                </div>
                                <div class="px-2">
                                    <select class="form-control">
                                        <option>Toutes les communes</option>
                                        <option>Département 1</option>
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
                            <th scope="col">Nom de l'agence</th>
                            <th scope="col">Départements </th>
                            <th scope="col">Communes </th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Agence - lorem </td>
                            <td>Département</td>
                            <td>Communes</td>
                            <td>2022 - 09 - 25</td>
                            <td>
                                <button class="btn btn-primary"> Voir plus</button>
                                <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                        class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                                <div class="dropdown-menu">
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
