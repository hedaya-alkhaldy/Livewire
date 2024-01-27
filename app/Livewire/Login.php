<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $user, $name, $password, $email;
    public $registerForm = False;
    public function render()
    {
        return view('livewire.login');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->password = '';
        $this->email = '';
    }

    public function login()
    {
        $validateData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',

        ]);

        if (\Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'You are login successful.');
        } else {
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',

        ]);

        $this->password = Hash::make($this->password);

        User::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password]);
        session()->flash('message', 'Your register successfully,Go to the login page.');
        $this->resetInputFields();
    }
}
