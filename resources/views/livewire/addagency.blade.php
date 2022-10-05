<div class="col-10 mx-auto py-3">
    <form action="" wire:submit.prevent="submit">
        @csrf
        {{-- <input type="hidden" value="{{ Auth::user()->id }}" wire:model="user_id" > --}}
        <div class="row p-4 bg-light rounded">
            <div class="col-md-6 py-2">
                <label for="">Sélectionner le département </label>
                <select class="form-control" name="departement_id" wire:model="departement_id">
                    <option value="null">Département</option>
                    @foreach ($departements as $departement)
                        <option value="{{ $departement->id }}">{{ $departement->designation }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5 py-2">
                <label for="">Sélectionner la commune </label>
                <select class="form-control" name="commune_id" wire:model="commune_id">
                    <option value="null">Commune</option>
                    @foreach ($communes as $commune)
                        <option value="{{ $commune->id }}">{{ $commune->designation }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 py-2">
                <label for="">Entrez le nom de l'agence </label>
                <input class="form-control" type="text" wire:model="name_agency">
            </div>
            <div class=" col-md-10 py-2">
                <button class="btn btn-primary" @if($name_agency==null || $commune_id == null || $departement_id ==null ) disabled @endif>Cliquez pour enregistrer le véhicule</button>
            </div>
        </div>
    </form>
</div>
