@extends('dashboard.layout')

@section('content')
    <div class=" text-center py-1">
        <h3>Créez une nouvelle agence</h3>
    </div>
    <div class="col-10 mx-auto py-3">
        <form action="">
            @csrf
            <div class="row p-4 bg-light rounded">
                <div class="col-md-6 py-2">
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
                <div class="col-md-4 py-2">
                    <label for="">Entrez le nom de l'agence </label>
                    <input class="form-control" type="text">
                </div>
                <div class=" col-md-10 py-2">
                    <button class="btn btn-primary">Cliquez pour enregistrer le véhicule</button>
                </div>
            </div>
        </form>
    </div>
@endsection
