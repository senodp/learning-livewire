<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Page Contact')]

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
