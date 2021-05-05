<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class CartIcon extends Component
{
    public int $count = 0;

    public function mount()
    {
        $this->setCount();
    }

    public function render()
    {
        return view('livewire.cart-icon');
    }

    public function setCount()
    {
        $this->count = count(Session::get('items', []));
    }
}
