<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{

    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public function register()
    {
        User::create([
            'name' => 'Teste',
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.app');
    }
}
