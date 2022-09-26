@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Supprimer un véhicule</h3>
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
                                        <option>Sélectionner une agence </option>
                                        <option>Agence 1 - Ville 1 - Département 1</option>
                                    </select>
                                </div>
                                <div class="px-2">
                                    <button class="btn btn-primary"> Voir </button>
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
                            <th scope="col">Immatriculation </th>
                            <th scope="col">Status</th>
                            <th scope="col">Action </th>
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
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Supprimer</button>
                            </td>
                            <!-- Modal of vehicle-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation de suppression</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Voulez vous vraiment supprimer ce véhicule ? </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Non </button>
                                            <button type="button" class="btn btn-primary" href="">Oui</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tr>


                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection
