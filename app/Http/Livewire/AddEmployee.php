<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;

class AddEmployee extends Component
{
    public $name;
    public $email;
    public $address;
    public $phone_no;

    public function render()
    {
        return view('livewire.add-employee');
    }

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'address' => 'nullable',
            'phone_no' => 'required'
        ]);

        Employee::create([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'phone_no' => $this->phone_no
        ]);
    }
}
