<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name'  => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function mount(Customer $customer) {
        $this->customer = $customer;
        $this->name     = $customer->name;
        $this->email    = $customer->email;
        $this->phone    = $customer->phone;
    }
    
    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function update() {
        $validatedData = $this->validate();
        $this->customer->update($validatedData);
        session()->flash('success', 'Customer Updated Sucsessfully.');
        return $this->redirect('/customers', navigate:true);
    }

}
