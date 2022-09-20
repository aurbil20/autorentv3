<?php

namespace App\Http\Livewire;

use Livewire\Component;
use  App\Http\Controllers;

class RegisterForm extends Component
{
    // Parameters 
    public $formStep = 1;
    public $role;

    // Input and select in form 

        // for client 
    public $name;
    public $firtsname;
    public $email;
    public $old_date;
    public $sex;
        // for enterprise 
    public $nameEnterprise;
    public $dreason;
    public $numifu;
    public $nameManager;
    public $firstnameManager;

        //common attribut 
    public $numTel;
    public $password;
    public $confirmPassword;
    public bool $okcheck = false;

    // Function

        // Next Step
    public function nextStep()
    {
        $this->formStep++;
        
    }

        // PrevStep
    public function prevStep()
    {
        $this->formStep--;
    }

    // Validation 

    protected $rulesClient = [

        'name' => 'required|min:6',
        'firstname' => 'required|min:6',
        'email' => 'required|email',

    ];

    protected $rulesEnterprises = [

        'name' => 'required|min:6',
        'firstname' => 'required|min:6',
        'email' => 'required|email',

    ];
    
    public function submit(){

    }


    public function render()
    {
        return view('livewire.register-form');
    }
}
