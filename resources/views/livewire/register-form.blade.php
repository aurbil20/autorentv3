<div>
    @if ($formStep == 1)
    <div class="text-center py-3">
                <h3>Qui êtes vous ?</h3>
            </div>
        <div class="form-group">
            <select class="form-control" wire:model="role">
                <option value="null">Choisissez votre statut</option>
                <option value="client">En tant que client ...</option>
                <option value="enterprise">En tant qu'entreprise ...</option>
            </select>
            @error('role')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="py-2">
            <button class="btn btn-primary" wire:click="nextStep"
                @if($role == null) disabled @endif>Suivant</button>
        </div>
    @elseif($formStep == 2)
        @if ($role == 'client')
            <div class="text-center py-3">
                <h3>Register as Client</h3>
            </div>
            <div class="py-3">
                <form action="" wire:submit.prevent="submit">
                    @csrf
                    <div class="form-group">
                        <label for="InputName">Nom </label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" wire:model="name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputEmail1">Prenom </label>
                        <input type="text" class="form-control" aria-describedby="emailHelp" wire:model="firstname">
                        @error('firstname')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputEmail1">Email address</label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" wire:model="email">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row gap-3">
                        <div class="col form-group">
                            <label for="Input">Date de naissance </label>
                            <input type="date" class="form-control" aria-describedby="emailHelp"
                                wire:model="old_date">
                            @error('old_date')
                                <span class="old_date">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="InputSex">Sexe </label>
                            <select class="form-control" wire:model="sex">
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
                            <input type="number" class="form-control" aria-describedby="emailHelp" wire:model="numTel">
                            @error('numTel')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                            wire:model="password">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                            wire:model="confirmPassword">
                        @error('confirmPassword')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Je suis d'accord avec les <a
                                href=" ">Conditions Générales d'utilisation</a> </label>
                    </div>
                    <div class=" inline-flex">
                        <a class="btn btn-primary" wire:click="prevStep"> Précédent</a>
                        <button type="submit" class="btn btn-primary" @if(!$okcheck) disabled @endif>Soumettre</button>
                    </div>

                </form>
            </div>
        @else
            <div class="text-center py-3">
                <h3>Register as Client</h3>
            </div>
            <div class="py-3">
                <form action="" wire:submit.prevent="submit">
                    @csrf
                    <div class="row gap-3">
                        <div class="col-8 form-group">
                            <label for="InputNameEnterprise">Nom de l'entreprise </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                wire:model="nameEnterprise">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-4 form-group">
                            <label for="InputSex">Raison sociale</label>
                            <select class="form-control" wire:model="dreason">
                                <option selected value="null">Choose ...</option>
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
                        <input type="number" class="form-control" aria-describedby="emailHelp" wire:model="numTel">
                        @error('numifu')
                            <span class="ifu">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class=" col form-group">
                            <label for="InputName">Nom de l'administrateur </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                wire:model="nameManager">
                            @error('nameManager')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label for="InputEmail1">Prenom de l'administrateur </label>
                            <input type="text" class="form-control" aria-describedby="emailHelp"
                                wire:model="firstnameManager">
                            @error('firstnameManager')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail1">Email address </label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" wire:model="email">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputEmail1">N° Téléphone</label>
                        <input type="number" class="form-control" aria-describedby="emailHelp" wire:model="numTel">
                        @error('numTel')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                            wire:model="password">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                            wire:model="confirmPassword">
                        @error('confirmPassword')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="okcheck">
                        <label class="form-check-label" for="exampleCheck1">Je suis d'accord avec les <a
                                href=" ">Conditions
                                Générales d'utilisation</a> </label>
                    </div>
                    <div class=" inline-flex">
                        <a class="btn btn-primary" wire:click="prevStep">Précédent</a>
                        <button type="submit" class="btn btn-primary" @if($okcheck == false) disabled @endif>Soumettre</button>
                    </div>
                </form>
            </div>
        @endif
    @endif
</div>
