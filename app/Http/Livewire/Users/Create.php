<?php

namespace App\Http\Livewire\Users;

use App\User;
use App\Validators\UserValidator;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Create extends Component
{
    public $user;

    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    public function render()
    {
        return view('livewire.users.create');
    }

    public function submit()
    {
        $this->validate(UserValidator::rules(), UserValidator::messages());

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Usuário adicionado com sucesso'
        ]);

        return Redirect::route('users.edit', $user);
    }
}
