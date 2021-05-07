<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Livewire\Component;

class FilterForm extends Component
{
    public Collection $categories;
    public ?string $category = null;
    public array $minValues = [];
    public int $minValue = 100;
    public array $maxValues = [];
    public int $maxValue = 5000;
    private int $step = 100;

    public function mount(Request $request)
    {
        $this->categories = Category::all();
        $this->category = $request->get('category');
        $this->minValue = $request->get('min-price', 100);
        $this->maxValue = $request->get('max-price', 5000);
        $this->minValues = range(100, $this->maxValue - $this->step, $this->step);
        $this->maxValues = range($this->minValue + $this->step, 5000, $this->step);
    }

    public function render()
    {
        return view('livewire.filter-form');
    }

    public function updated()
    {
        $queryParams = [
            'min-price' => $this->minValue,
            'max-price' => $this->maxValue,
        ];

        if ($this->category !== null) {
            $queryParams['category'] = $this->category;
        }

        $this->redirectRoute('home', $queryParams);
    }
}
