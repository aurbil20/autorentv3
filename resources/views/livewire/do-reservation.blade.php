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
                                        <th>Tarif jour</th>
                                        <th>Tarif semaine</th>
                                        <th>Tarif mois</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <td class="align-middle"><img src="{{ asset('img/imgimg.png') }}" alt=""
                                                style="width: 150px;"></td>
                                        <td class="align-middle">{{ $marque->name }}</td>
                                        <td class="align-middle">{{ $modele->name }}</td>
                                        <td class="align-middle">$150</td>
                                        <td class="align-middle">$150</td>
                                        <td class="align-middle">$150</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input">
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
                            <select class="form-control">
                                <option>Horaire</option>
                                <option>Journalière</option>
                                <option>Mensuelle</option>
                                <option>Annuelle</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label>Périodicité </label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-md-5 form-group">
                            <label>Montant de la réservation</label>
                            <input class="form-control" type="text" placeholder="$150" disabled>
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
                        </div>
                        <div class="col-md-6 py-4">
                            <kkiapay-widget amount="<montant-a-preleve-chez-le-client>" key="<votre-api-key>"
                                url="<url-vers-votre-logo>" position="center" sandbox="true" data=""
                                callback="<url-de-redirection-quand-lepaiement-est-reuissi>"> Passez au paiement
                            </kkiapay-widget>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal For Validation-->
        <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<!-- Form End -->
