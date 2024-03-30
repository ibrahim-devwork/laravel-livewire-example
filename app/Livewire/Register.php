<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name'      => 'required|min:3|max:250',
        'email'     => 'required|email|unique:users,email|max:250',
        'password'  => 'required|min:3|max:255',
    ];

    public function render()
    {
        return view('livewire.register');
    }

    public function register() {
        $validatedData = $this->validate();
        $user = User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => Hash::make($this->password),
        ]);
        
        Auth::login($user);

        session()->flash('success', 'Registration successfully.');
        return $this->redirect('/customers', navigate:true);
    }
}
