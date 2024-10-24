<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'like', '%' . $this->search . '%')->take(5)->get();
        } else {
            $products = collect();
        }

        return view('livewire.search', ['products' => $products]);
    }
}
