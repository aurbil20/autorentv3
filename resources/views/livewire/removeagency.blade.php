<div class="col-10 mx-auto py-3">
        <form action="" wire:submit.prevent="submit" >
            @csrf
            <div class="row p-4 bg-light rounded">
                <div class="col-md-6 py-2">
                    <label for="">Sélectionnez le département </label>
                    <select class="form-control" name="" wire:model="departement_id">
                        <option value="null">Département</option>
                        @foreach ($departements as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->designation }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5 py-2">
                    <label for="">Sélectionnez la commune </label>
                    <select class="form-control" name="" wire:model="commune_id">
                        <option value="null">Commune</option>
                        @foreach ($communes as $commune)
                            <option value="{{ $commune->id }}">{{ $commune->designation }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 py-2">
                    <label for="">Sélectionnez le nom de l'agence à supprimer </label>
                    <select class="form-control" name="" wire:model="agence_id">
                        <option value="null">Agence</option>
                    </select>
                </div>
                <div class=" col-md-10 py-2">
                    <button class="btn btn-primary" @if($agence_id==null || $commune_id == null || $departement_id ==null ) disabled @endif>Cliquez pour continuer la suppression</button>
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