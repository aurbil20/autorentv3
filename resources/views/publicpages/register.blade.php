@extends('publicpages.layout')

@section('title')
    Register
@endsection

@section('content')
    <div class="row ">
        <div class="col-7">
            <div class=" col-10 mx-auto">
                <img src="{{ asset('img/illustration_signup.jpg') }}" class="col-12" alt="">
            </div>

        </div>
        <div class="col-5 d-flex align-content-center flex-wrap">
            <div class="col-11 rounded p-4 bg-white mx-auto">
                <div class="bg-light rounded p-4">
                    <div class="">
                        @livewire('register-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
