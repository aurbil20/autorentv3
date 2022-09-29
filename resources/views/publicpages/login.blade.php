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
                        <form id="formlogin" method="POST" action="{{ Route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="*****">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
