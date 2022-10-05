@extends('dashboard.layout')

@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <div class="text-center pb-4">
                <h3> Toutes les agences </h3>
            </div>
            @livewire('allagencies')
        </div>
    </div>
@endsection
