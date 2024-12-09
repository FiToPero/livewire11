<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $address;

    public function render()
    {
        return view('livewire.register');
    }

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'address' => $this->address,
        ]);

        return redirect()->to('/login');
    }
}
