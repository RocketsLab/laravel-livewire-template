<?php

namespace App\Http\Livewire\Users;

use App\User;
use App\Validators\UserValidator;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Edit extends Component
{
    public $user;

    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.users.edit', [
            'user' => $this->user
        ]);
    }

    public function submit()
    {
        UserValidator::setIgnore(['user' => $this->user->id]);
        $this->validate(UserValidator::rules(), UserValidator::messages());

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->password = '';
        $this->password_confirmation = '';

        $this->emit('notify', [
            'type' => 'success',
            'message' => 'Usuário atualizado'
        ]);
    }
}
