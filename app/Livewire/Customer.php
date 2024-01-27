<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CustomerM;

class Customer extends Component
{
    public  $name = '';
    public  $email = '';
    public  $phone = '';

    public function render()
    {
        return view('livewire.customer');
    }

    public function save()

    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customer_m_s|max:255',
            'phone' => 'required|unique:customer_m_s|max:255 ',
        ]);

        CustomerM::create($validated);
        $this->reset();
    }
}
