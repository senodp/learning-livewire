<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Page About')]

class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
