<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Page User')]

class Show extends Component
{
    public \App\Models\User $user;

    public function render()
    {
        return view('livewire.users.show')->title('User : ' .$this->user->name);
    }
}
