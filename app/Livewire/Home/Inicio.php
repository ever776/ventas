<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Inicio test')]
class Inicio extends Component
{
    public function render()
    {
        return view('livewire.home.inicio');
    }
}
