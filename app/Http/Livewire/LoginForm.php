<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    // Variables

    public $email;

    public $password;


    // Validation 

    protected $rules = [

        'email' => 'required|email',
        'password' => 'required',

    ];

    public function updatedEmail($email,$password)
    {

        $this->validateOnly($email,$password);
    }

    public function submit()

    {
        $request = $this->validate();


    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
