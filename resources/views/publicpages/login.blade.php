@extends('publicpages.layout')

@section('title')
    Connexion
@endsection

@section('content')
    <div class="row ">
        <div class="col-7">
            <div class=" col-10 mx-auto">
                <img src="{{ asset('img/illustration_login.jpeg') }}" class="col-12" alt="">
            </div>

        </div>
        <div class="col-5 d-flex align-content-center flex-wrap">
            <div class="col-11 rounded p-4 bg-white mx-auto">
                <div class="bg-light rounded p-4">
                    <div class="text-center p-2">
                        <h3>Connexion</h3>
                    </div>
                    <div class="">
                        @livewire('login-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
