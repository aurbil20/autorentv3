@extends('dashboard.layout')

@section('content')
    <div class="row mx-4 py-2">
        <h3 class="title-1 m-b-25">Dashboard</h3>
    </div>

    <div class="row gap-3 mx-4 my-1 py-2">
        <div class="col bg-light p-4 mx-2 rounded">
            <h4 class="">Balance :</h4> <br>
            <h5>{{ Auth::user()->solde }}</h5>
        </div>
        <div class="col bg-light p-4 mx-2 rounded">
            <h4 class="">Nombres d'entreprises :</h4> <br>
            <h5>{{ $numberenterprises }}</h5>
        </div>
        <div class="col bg-light p-4 mx-2 rounded">
            <h4 class="">Nombres d'agences crées :</h4> <br>
            <h5>{{ $numberagences }}</h5>
        </div>
        <div class="col bg-light p-4 mx-2 rounded">
            <h4 class="">Nombres de clients total : </h4> <br>
            <h5>{{ $numberclients }}</h5>
        </div>
    </div>

    <div class="row mx-4 my-3 py-2">
        <div class="col-lg-11">
            <h2 class="title-1 m-b-25">Dernières inscription</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Crée le</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Raison social</th>
                            <th>Status</th>
                            <th>Balance</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reverseusers as $reverseuser)
                            <tr>
                                <td>{{ $reverseuser->created_at }}</td>
                                @if ($reverseuser->role_id == 2)
                                    <td colspan="2">{{ $reverseuser->name }}</td>
                                @else
                                    <td>{{ $reverseuser->name }}</td>
                                    <td>{{ $reverseuser->fname }}</td>
                                @endif
                                <td>{{ $reverseuser->structure }}</td>
                                <td>{{ $reverseuser->etat }}</td>
                                <td class="text-left">${{ $reverseuser->solde }}</td>
                                <td class="text-left">
                                    @foreach ( $roles as $role)
                                        @if ($role->id == $reverseuser->role_id)
                                            {{ $role->designation }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
