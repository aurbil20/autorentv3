<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        if ($input['role'] == "2") {
            // Enterprise validation

            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'dreason' => ['required', 'string'],
                'numifu' => ['required', 'integer', 'min:13'],
                'nameManager' => ['required', 'string', 'max:255'],
                'fnameManager' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'numtel' => ['required','string','min:8'],
                'password' => ['required', 'confirmed', 'min:8'],
                
            ])->validate();

            return User::create([
                'name' => $input['name'],
                'structure' => $input['dreason'],
                'numifu' => $input['numifu'],
                'name_manager'  => $input['nameManager'],
                'fname_manager'  => $input['fnameManager'],
                'email' => $input['email'],
                'numtel' => $input['numtel'],
                'solde' => 0, 
                'role_id' => $input['role'],
                'password' => Hash::make($input['password']),
            ]);
        } elseif ($input['role'] == "3") {

            // Client validation

            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'fname' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'old_date' => ['required', 'date' ],
                'sex' => ['required', 'string'],
                'numtel' => ['required', 'string'],
                'solde' => 0,
                'password' => ['required', 'confirmed', 'min:8'],
            ])->validate();


            return User::create([
                'name' => $input['name'],
                'fname' => $input['fname'],
                'email' => $input['email'],
                'old_date' => $input['old_date'],
                'sex' => $input['sex'],
                'numtel' => $input['numtel'],
                'role_id' => $input['role'],
                'password' => Hash::make($input['password']),
            ]);
        }





        // Template

        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique(User::class),
        //     ],
        //     'password' => $this->passwordRules(),
        // ])->validate();

        // return User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        // ]);
    }
}
