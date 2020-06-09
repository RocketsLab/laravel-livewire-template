<?php

namespace App\Http\Livewire\Users;

use App\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $updatesQueryString = [
        'search' => ['except' => '']
    ];

    public $showFilter;

    public $search;

    public function mount($showFilter = false)
    {
        $this->showFilter = $showFilter;
    }

    public function render()
    {
        $users = User::query()
            ->where('name', 'like',  "%{$this->search}%")
            ->orWhere('email', 'like', "%{$this->search}%")
            ->paginate();

        return view('livewire.users.index', [
            'users' => $users
        ]);
    }

    public function toggleFilter()
    {
        $this->showFilter = ! $this->showFilter;
    }

    public function clear()
    {
        $this->search = '';
    }

    public function editUser($user)
    {
        return Redirect::route('users.edit', $user);
    }
}
