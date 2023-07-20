<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'LIKE', "%{$this->search}%")->get();

        return view('livewire.search', [
            'users' => $users,
        ]);
    }
}
