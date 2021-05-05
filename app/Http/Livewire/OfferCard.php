<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OfferCard extends Component
{
    public Offer $offer;

    public int $countInCart = 0;

    public function mount()
    {
        $this->countInCart = Session::get("items.{$this->offer->id}", 0);
    }

    public function render()
    {
        return view('livewire.offer-card');
    }

    public function add()
    {
        $this->countInCart++;
        Session::increment("items.{$this->offer->id}");
    }

    public function remove()
    {
        $this->countInCart--;
        Session::decrement("items.{$this->offer->id}");
    }
}
