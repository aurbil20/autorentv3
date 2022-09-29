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
                    <div class="text-center py-3">
                        <h3>Qui etes vous ? </h3>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="choice">
                            <option>Choisissez ....</option>
                            <option value="client">En tant que client ....</option>
                            <option value="enterprise">En tant qu'entreprise ....</option>
                        </select>
                    </div>
                    <div id="clientdiv" class="py-3">
                        <form id="registerclient" action="{{ Route('register') }}" method="POST">
                            @csrf
                            <input type="text" name="role" value="3" style="display: none">
                            <div class="form-group">
                                <label for="InputName">Nom </label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">Prenom </label>
                                <input type="text" class="form-control" id="fname" name="fname">
                                @error('firstname')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row gap-3">
                                <div class="col form-group">
                                    <label for="Input">Date de naissance </label>
                                    <input type="date" class="form-control" id="old_date" name="old_date">
                                    <p class="text-muted">Vous devez avoir plus de 23 ans </p>
                                    @error('old_date')
                                        <span class="old_date">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="InputSex">Sexe </label>
                                    <select class="form-control" id="sex" name="sex">
                                        <option selected>Choose ...</option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>
                                    </select>
                                    @error('sex')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="InputEmail1">N° Téléphone</label>
                                    <input type="number" class="form-control" id="numTel" name="numtel">
                                    @error('numTel')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Password</label>
                                <input type="password" class="form-control" placeholder="" id="password" name="password">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="" id="confirmPassword"
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="okcgu" name="okcgu">
                                <label class="form-check-label" for="exampleCheck1">Je suis d'accord avec les <a
                                        href=" ">Conditions Générales d'utilisation</a> </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </form>
                    </div>
                    <div id="enterprisediv" class="py-3">
                        <form id="registerenterprise" action="{{ Route('register') }}" method="POST">
                            @csrf
                            <input type="text" name="role" value="2" style="display: none">
                            <div class="row gap-3">
                                <div class="col-8 form-group">
                                    <label for="InputNameEnterprise">Nom de l'entreprise </label>
                                    <input type="text" class="form-control" id="name" name="name">
                                    @error('name')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-4 form-group">
                                    <label for="InputSex">Raison sociale</label>
                                    <select class="form-control" id="dreason" name="dreason">
                                        <option value="null" selected>Choose ...</option>
                                        <option value="SA">SA</option>
                                        <option value="SARL">SARL</option>
                                        <option value="SAS">SAS</option>
                                    </select>
                                    @error('dreason')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">N° IFU </label>
                                <input type="number" class="form-control" id="numifu" name="numifu">
                                @error('numifu')
                                    <span class="ifu">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class=" col form-group">
                                    <label for="InputName">Nom de l'administrateur </label>
                                    <input type="text" class="form-control" id="nameManager" name="nameManager">
                                    @error('nameManager')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <label for="InputEmail1">Prenom de l'administrateur </label>
                                    <input type="text" class="form-control" id="fnameManager" name="fnameManager">
                                    @error('firstnameManager')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail1">Email address </label>
                                <input type="email" class="form-control" id="email" name="email">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputEmail1">N° Téléphone</label>
                                <input type="text" class="form-control" id="numTel" name="numTel">
                                @error('numTel')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Password</label>
                                <input type="password" class="form-control" placeholder="*********" 
                                    name="password">
                                @error('password')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="" 
                                    name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="okcheck" name="okcheck">
                                <label class="form-check-label" for="exampleCheck1">Je suis d'accord avec les <a
                                        href=" ">Conditions
                                        Générales d'utilisation</a> </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
