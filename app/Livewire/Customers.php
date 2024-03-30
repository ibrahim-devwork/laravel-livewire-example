<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchKey = '';

    public function render()
    {
        $customers = Customer::query()
        ->when($this->searchKey, function ($query, $searchKey) {
            return $query->where('name', 'like', '%' . $searchKey . '%');
        })
        ->paginate(15);

        return view('livewire.customers', [
            'customers' => $customers
        ]);
    }

    public function search()
    {
        $this->resetPage();
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        session()->flash('success', 'Customer Deleted Sucsessfully.');
        return $this->redirect('/customers', navigate:true);
    }

}