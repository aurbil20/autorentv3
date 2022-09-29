<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
         //dd($input);

        // Model 

       // dd("testons");

        if ($input['role'] == "2") {
            // Enterprise validation
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'dreason' => ['required', 'string', 'max:255'],
                'numifu' => ['required', 'integer', 'max:255'],
                'nameManager' => ['required', 'string', 'max:255'],
                'fnameManager' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'numtel' => ['required', 'string', 'max:255'],
                'password' => ['required', 'min:8'],
                // 'confirmPassword' => ['required', 'same:password'],
                // 'password' => $this->passwordRules(),
            ])->validate();

            return User::create([
                'name' => $input['name'],
                'structure' => $input['dreason'],
                'numifu' => $input['numifu'],
                'name_manager'  => $input['nameManager'],
                'fname_manager'  => $input['fnameManager'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class),
                ],
                'numtel' => $input['numtel'],
                'role_id' => $input['role'],
                'password' => Hash::make($input['password']),
            ]);
        } elseif ($input['role'] == "3") {
             //dd($input);
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
                'old_date' => ['required', 'string', 'max:255'],
                'sex' => ['required', 'string', 'max:255'],
                'numtel' => ['required', 'integer', 'max:255'],
                'password' => ['required', 'confirmed', 'min:8'],
               //'password_confirmation' => ['required'],
                // 'password' => $this->passwordRules(),
            ])->validate;
            dd($input);
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
