<?php

namespace App\Livewire;

use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name'  => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function store() {
        $validatedData = $this->validate();
        Customer::create($validatedData);
        // $this->reset();
        session()->flash('success', 'Customer Created Sucsessfully.');
        return $this->redirect('/customers', navigate:true);
    }
}
