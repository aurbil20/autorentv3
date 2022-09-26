@extends('dashboard.layout')

@section('content')
    <div class=" text-center py-1">
        <h3>Ajouter un véhicule à votre parc automobile</h3>
    </div>
    <div class="col-10 mx-auto py-3">
        <form action="" enctype="multipart/form-data">
            @csrf
            <div class="row p-4 bg-light rounded">
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
                <div class="col-md-8 py-2">
                    <label for="">Sélectionner l'agence recevant le véhicule</label>
                    <select class="form-control" name="">
                        <option value="null">Agence</option>
                    </select>
                </div>
                <div class="col-md-8 ">
                    <hr>
                </div>
                <div class="col-md-5 py-2">
                    <label for="">Sélectionner la marque : </label>
                    <select class="form-control" name="">
                        <option value="null">Marque</option>
                    </select>
                </div>
                <div class="col-md-5 py-2">
                    <label for="">Sélectionner le modèle :</label>
                    <select class="form-control" name="">
                        <option value="null">Modèle</option>
                    </select>
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Entrez l'immatriculation</label>
                    <input class="form-control" type="text">
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Entrez l'année de sortie </label>
                    <input class="form-control" type="number">
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Selectionner la boite de vitesse </label>
                    <select class="form-control" name="">
                        <option value="null">Automatique</option>
                        <option value="null">Manuelle</option>
                    </select>
                </div>
                <div class="col-md-3 py-2">
                    <label for="">Entrez le nombre de place </label>
                    <input class="form-control" type="number">
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez le nombre de porte du véhicule</label>
                    <input class="form-control" type="number">
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez la consommation du véhicule : </label>
                    <div class="form-inline">
                        <input class="form-control" type="number">
                        <div class="px-2">
                            <h5 class=" text-base"> Litres/100km</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez la capacité du véhicule : </label>
                    <div class="form-inline">
                        <input class="form-control" type="number">
                        <div class="px-2">
                            <h5 class=" text-base"> tonnes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Le véhicule est climatisé
                        </label>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Sélectionner les images du véhicules :</label>
                    <input class="form-control" type="file">
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">Cliquez pour enregistrer le véhicule</button>
                </div>
            </div>
        </form>
    </div>
@endsection
