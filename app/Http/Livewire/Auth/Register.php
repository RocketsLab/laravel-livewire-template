<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Register extends Component
{
    public $email;

    public $password;

    public $password_confirmation;

    public $name;

    public function submit()
    {
        $this->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $this->register();

        return Redirect::to('/');
    }

    protected function register()
    {
        event(new Registered($user = User::create([
            'name' => $this->name,
            'password' => bcrypt($this->password),
            'email' => $this->email
        ])));

        Auth::guard()->login($user);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
