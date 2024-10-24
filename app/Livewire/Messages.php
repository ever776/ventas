<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    public function render()
    {
        return view('livewire.messages');
    }

    #[On('msg')]
    public function msgs($msg){
        session()->flash('msg',$msg);
    }
}
