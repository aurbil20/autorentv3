<div class="col-md-8 ">
    <div class="row gap-3">
        <div class="col ">
            <div class="d-flex py-2">
                <div class="px-2">
                    <label for="exampleFormControlSelect1">Trier par : </label>
                </div>
                <div class="px-2">
                    <select class="form-control" wire:model="departement_id">
                        <option>Tous les départements</option>
                        @foreach ($departements as $departement)
                            <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="px-2">
                    <select class="form-control" wire:model="commune_id">
                        <option>Toutes les communes</option>
                        @foreach ($communes as $commune)
                            <option>{{ $commune_id }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
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
            @forelse ($agences as $agence)
                <tr>
                    <td scope="row">0</td>
                    <td>{{ $agence->name }}</td>
                    <td>
                        
                    </td>
                    <td>
                        @foreach ($communes as $commune)
                            @if ($agence->commune_id == $commune->id)
                                {{ $commune->designation }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $agence->created_at }}</td>
                    <td>
                        <button class="btn btn-primary"> Voir plus</button>
                        <button class="btn btn-primary" data-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Supprimer</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"> Aucune agence pour le moment</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<!-- END DATA TABLE-->
