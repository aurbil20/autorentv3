@extends('dashboard.layout')

@section('content')
    <div class=" text-center py-1">
        <h3>Supprimer une agence</h3>
    </div>
    <div class="col-10 mx-auto py-3">
        <form action="">
            @csrf
            <div class="row p-4 bg-light rounded">
                <div class="col-md-6 py-2">
                    <label for="">Sélectionnez le département </label>
                    <select class="form-control" name="">
                        <option value="null">Département</option>
                    </select>
                </div>
                <div class="col-md-5 py-2">
                    <label for="">Sélectionnez la commune </label>
                    <select class="form-control" name="">
                        <option value="null">Commune</option>
                    </select>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Sélectionnez le nom de l'agence à supprimer </label>
                    <select class="form-control" name="">
                        <option value="null">Agence</option>
                    </select>
                </div>
                <div class=" col-md-10 py-2">
                    <button class="btn btn-primary">Cliquez pour continuer la suppression</button>
                </div>
                <div class=" col-md-10 py-3">
                    <p> 
                        <h5>NB : Avant de pouvoir supprimer l'agence il faut que : </h5> <br>
                        <ul>
                            <li>L'agence a tous ses véhicules disponibles et/ou en panne</li>
                            <li>Les vehicules de cette agence doit etre supprimés ou réaffecter à une autre agence</li>
                        </ul>
                    </p>
                </div>

            </div>
        </form>
    </div>
@endsection
