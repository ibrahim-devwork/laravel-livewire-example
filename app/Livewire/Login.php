<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email'     => 'required|email|max:250',
        'password'  => 'required|min:3|max:255',
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function login(Request $request) {
        $validatedData = $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $request->session()->regenerate();
            return $this->redirect('/customers', navigate:true);
        }

        $this->addError('password', 'The password provided does not match the email');
    }

}
