<div>
    <div class=" text-center py-1">
        <h4> Renseignez les infos sur le véhicule </h4>
    </div>
    <div class="col-10 mx-auto py-3">
        <form action="" enctype="multipart/form-data" wire:submit.prevent="nextStep">
            @csrf
            <div class="row p-4 bg-light rounded">
                <div class="col-md-10 py-2">
                    <label for="">Sélectionner l'agence recevant le véhicule</label>
                    <select class="form-control" name="agence_id" wire:model="agence_id">
                        <option value="null">Agence</option>
                        @foreach ($agences as $agence)
                            <option value="{{ $agence->id }}"> {{ $agence->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Sélectionner la marque : </label>
                    <select class="form-control" name="marque_id" wire:model="marque_id">
                        <option value="null">Sélectionnez ... </option>
                        @foreach ($marques as $marque)
                            <option value="{{ $marque->id }}">{{ $marque->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Sélectionner le modèle :</label>
                    <select class="form-control" name="modele_id" wire:model="modele_id">
                        <option value="null">Modèle</option>
                        @foreach ($modeles as $modele)
                            <option value="{{ $modele->id }}">{{ $modele->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Selectionner le type du véhicule </label>
                    <select class="form-control" name="typedevehicule_id" wire:model="typedevehicule_id">
                        <option value="null">Type de véhicule</option>
                        @foreach ($typedevehicules as $typedevehicule)
                            <option value="{{ $typedevehicule->id }}">{{ $typedevehicule->gamme }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 py-2">
                    <label for="">Entrez l'immatriculation</label>
                    <input class="form-control" type="text" wire:model="immatriculation">
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Entrez l'année de sortie </label>
                    <input class="form-control" type="number" wire:model="year">
                </div>
                <div class="col-md-4 py-2">
                    <label for="">Selectionner la boite de vitesse </label>
                    <select class="form-control" name="" wire:model="gearbox">
                        <option value="null">Boite de vitesse</option>
                        <option value="automatique">Automatique</option>
                        <option value="manuelle">Manuelle</option>
                    </select>
                </div>
                <div class="col-md-3 py-2">
                    <label for="">Entrez le nombre de place </label>
                    <input class="form-control" type="number" wire:model="placenumber">
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez le nombre de porte du véhicule</label>
                    <input class="form-control" type="number" wire:model="doornumber">
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez la consommation du véhicule : </label>
                    <div class="form-inline">
                        <input class="form-control" type="number" wire:model="conso">
                        <div class="px-2">
                            <h5 class=" text-base"> Litres/100km</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Entrez la capacité du véhicule : </label>
                    <div class="form-inline">
                        <input class="form-control" type="number" wire:model="capacity">
                        <div class="px-2">
                            <h5 class=" text-base"> tonnes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" wire:model="checkclimatisation">
                        <label class="form-check-label" for="defaultCheck1">
                            Le véhicule est climatisé
                        </label>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Sélectionner les images du véhicules :</label>
                    <input class="form-control" type="file" wire:model="images" multiple>
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">Cliquez pour enregistrer le véhicule</button>
                </div>
                <div class=" col-10 py-2">
                    <p>NB : Ajoutez les tarifs liés à ce véhicule dans ces paramètres.</p>
                </div>
            </div>
        </form>
    </div>
</div>
