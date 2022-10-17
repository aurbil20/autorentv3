<!-- Form Start -->
<div class="container-fluid pt-5">
    <form action="">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Facturation </h4>
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Informations personnelles</h4>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nom </label>
                            <input class="form-control" type="text" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Prénom</label>
                            <input class="form-control" type="text" value="{{ Auth::user()->fname }}" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value="{{ Auth::user()->email }}" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>No Télephone</label>
                            <input class="form-control" type="text" value="{{ Auth::user()->numtel }}" disabled>
                        </div>
                        <div class="col-md-8">
                            <hr>
                        </div>
                        <div class="col-md-8">
                            <h4>Véhicule réservé</h4>
                        </div>
                        <div class="col-md-12 table-responsive mb-5">
                            <table class="table table-bordered text-center mb-0">
                                <thead class="bg-secondary text-dark">
                                    <tr>
                                        <th>Images</th>
                                        <th>Marque</th>
                                        <th>Modèle</th>
                                        <!--
                                            Display according to the number of tariffs defined
                                        -->
                                        @foreach ($periodicites as $periodicite)
                                            @foreach ($tarifs as $tarif)
                                                @if ($tarif->periodicite_id == $periodicite->id)
                                                    <th>{{ $periodicite->designation }}</th>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <td class="align-middle"><img src="{{ asset('img/imgimg.png') }}" alt=""
                                                style="width: 150px;"></td>
                                        <td class="align-middle">{{ $marque->name }}</td>
                                        <td class="align-middle">{{ $modele->name }}</td>
                                        <!--
                                            Display according to the number of tariffs defined
                                        -->
                                        @foreach ($periodicites as $periodicite)
                                            @foreach ($tarifs as $tarif)
                                                @if ($tarif->periodicite_id == $periodicite->id)
                                                    <th>{{ $tarif->price }}</th>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" wire:model='okdriver'>
                                <label class="form-check-label">Je veux un chauffeur</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <hr>
                        </div>
                        <div class="col-md-8">
                            <h4>Période et montant de réservation</h4>
                        </div>
                        <div class="col-md-5 form-group">
                            <label>Type de périodicité </label>
                            <select class="form-control" wire:model='periodicite_id'>
                                <option value="null" >Choisissez la périodicité...</option>
                                @foreach ($periodicites as $periodicite)
                                    @foreach ($tarifs as $tarif)
                                        @if ($tarif->periodicite_id == $periodicite->id)
                                            <option value="{{ $periodicite->id }}">{{ $periodicite->designation }}</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label>Période </label>
                            <input class="form-control" type="number" wire:model='period'>
                        </div>
                        <div class="col-md-5 form-group">
                            <label>Montant de la réservation</label>
                            <input class="form-control" type="text" placeholder="0" wire:model='amount' readonly >
                            <h6 class="text-muted">NB : Avec un chauffeur, le cout de la réservation augmente</h6>
                        </div>
                        <div class="col-md-7 form-group">
                            <p class="my-4">
                                Vous réservez le véhicule pendant 0 année, 0 mois et 0 jours.
                            </p>
                        </div>
                        <div class="col-md-8">
                            <hr>
                        </div>
                        <div class="col-md-8">
                            <h4>Entreprise </h4>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Entreprise </label>
                            <input class="form-control" type="text" placeholder="Entreprise" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Agence de l'entreprise </label>
                            <input class="form-control" type="text" placeholder="Agence de l'entreprise" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Commune</label>
                            <input class="form-control" type="text" placeholder="Commune" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Département</label>
                            <input class="form-control" type="text" placeholder="Département" disabled>
                        </div>
                        <div class="col-md-8">
                            <hr>
                            <!-- Hidden input to pass transaction_id value between JS and PHP -->
                            <input type="hidden" id="transaction_id" wire:model='transaction_id'>
                        </div>
                        <div class="col-md-6 py-4">
                            <kkiapay-widget amount="{{ $amount }}" key="ed679fd0431c11edbaac9dddefe79ac9"
                                url="{{ Route('home') }}" theme="#d19c97" position="center" sandbox="true"
                                data="{'Reservation': '{{ $code }}'}" callback="{{ Route('successful_transation') }}" />
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Form End -->
