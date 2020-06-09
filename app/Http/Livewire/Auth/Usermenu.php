<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Usermenu extends Component
{
    public function logout()
    {
        Auth::logout();

        return Redirect::to('login');
    }

    public function render()
    {
        return view('livewire.auth.usermenu');
    }
}
